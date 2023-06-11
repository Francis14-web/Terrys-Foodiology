<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Food;
use App\Models\Admin;
use App\Models\Canteen;
use App\Models\Inventory;
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

    public function promo(){
        return view('user.promo');
    }


    public function settings(){
        return view('user.settings');
    }

    public function message(){
        $canteen = Canteen::where('email', 'terry.canteen@gmail.com')->first();
        $admin = Admin::where('email', 'admin@admin.com')->first();
        return redirect()->route('user.conversation', $canteen->id);
        return view('user.conversation', compact('canteen', 'admin'));

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

    public function expired(){
        return view('error.error403');
    }

    public function restricted(){
        if (auth()->guard('user')->user()->is_restricted == 0) {
            // return redirect()->route('user.dashboard');
        }
        return view('user.restricted');
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
            $stock = $food->food_stock - $userOrder->quantity;
            $food->food_stock = $stock;
            $food->save();
        
            $inventory = Inventory::where('food_uuid', $food->id)->first();
            // $inventory->food_stock = $stock;
            $inventory->food_sold += $userOrder->quantity;
            $inventory->food_left -= $userOrder->quantity;
            $inventory->save();

            Log::create([
                'log_inventory_id' => $inventory->id,
                'log_job' => 'Purchased',
                'log_stock' => $userOrder->quantity,
                'log_description' => 'Added ' . $userOrder->quantity . ' ' . $food->food_name . ' to inventory',
            ]);
        
            event(new CanteenMenuPageEvent($food->owner_id)); // Broadcast the new menu to canteen
        }
        
        // Broadcast the new order
        event(new UserMenuPageEvent());
        return redirect()->route('user.order', ['success' => $order->id]);
    }

    public function paymentFailed(){
        notyf()
            ->position('x', 'right')->position('y', 'top')
            ->dismissible(true)
            ->ripple(true)
            ->addWarning('Payment failed!');

        return redirect()->route('user.menu');
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
