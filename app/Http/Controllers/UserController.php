<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Canteen;
use App\Models\Admin;
use App\Models\OrderGroup;
use App\Models\Verification;
use App\Events\UserMenuPageEvent;
use App\Events\CanteenMenuPageEvent;
use App\Events\CanteenOrderPageEvent;
use Luigel\Paymongo\Facades\Paymongo;

class UserController extends Controller
{
    public function dashboard(){
        return view('user.dashboard');
    }

    public function menu(){
        return view('user.menu');
    }

    public function settings(){
        return view('user.settings');
    }

    public function message(){
        $canteen = Canteen::where('email', 'terry.canteen@gmail.com')->first();
        $admin = Admin::where('email', 'admin@admin.com')->first();
        return view('user.message', compact('canteen', 'admin'));
    }

    public function conversation($user){
        $canteen = Canteen::where('email', 'terry.canteen@gmail.com')->first();
        $admin = Admin::where('email', 'admin@admin.com')->first();
        $target = Canteen::where('id', $user)->first();
        if ($target == null) {
            $target = Admin::where('id', $user)->first();
        }
        return view('user.conversation', compact('target', 'canteen', 'admin'));
    }

    public function restricted(){
        return view('error/error403');
    }

    public function order(){
        $order = OrderGroup::where([
            'customer_id' => auth()->guard('user')->user()->id,
            'status' => 'Cart',
        ])->whereDate('created_at', date('Y-m-d'))->first();
        
        return view('user.order', [
            'order' => $order,
        ]);
    }

    public function viewOrder(OrderGroup $orders) {
        
        $data = $orders->id;
        return view('user.view-order', compact('data'));
    }

    public function viewMenu(Food $food){
        return view('user.view-menu', compact('food'));
    }
 
    public function test(){
        $gcashSource = Paymongo::source()->create([
            'type' => 'gcash',
            'amount' => 100.00,
            'currency' => 'PHP',
            'redirect' => [
                'success' => route('user.payment.success'),
                'failed' => route('user.payment.failed')
            ]
        ]);

        return redirect($gcashSource->redirect['checkout_url']);
    }

    public function paymentSuccess($id){
        $order = OrderGroup::find($id);
        $order->status = 'Serving';
        $order->save();

        //Get all food and reduce the quantity
        foreach($order->orders as $userOrder){
            $food = Food::find($userOrder->food_id);
            $food->food_stock = $food->food_stock - $userOrder->quantity;
            event(new CanteenMenuPageEvent($food->owner_id)); // Broadcast the new menu to canteen
            $food->save();
        }

        // Broadcast the new order
        event(new UserMenuPageEvent());

        // notyf()
        //     ->position('x', 'right')->position('y', 'top')
        //     ->dismissible(true)
        //     ->ripple(true)
        //     ->addSuccess('New order has arrived!');

        return redirect()->route('user.order', ['success' => $order->id]);
    }

    public function paymentFailed(){
        notyf()
            ->position('x', 'right')->position('y', 'top')
            ->dismissible(true)
            ->ripple(true)
            ->addWarning('Payment failed!');

        return redirect()->route('user.order');
    }

    public function verification(){
        if (auth()->guard('user')->user()->account_verified) {
            return redirect()->route('user.dashboard');
        }
        $verification = Verification::where('user_id', auth()->guard('user')->user()->id)->first();
        // dd ($verification);
        return view('user.verification', compact('verification'));
    }
}
