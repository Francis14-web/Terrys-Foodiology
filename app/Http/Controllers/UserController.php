<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\OrderGroup;
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
        return view('user.message');
    }

    public function order(){
        $order = OrderGroup::where([
            'customer_id' => auth()->guard('user')->user()->id,
            'status' => 'Not yet Paid',
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
        $order->status = 'Paid';
        $order->save();

        notyf()
            ->position('x', 'right')->position('y', 'top')
            ->dismissible(true)
            ->ripple(true)
            ->addSuccess('Payment successful!');

        return redirect()->route('user.order');
    }

    public function paymentFailed(){
        notyf()
            ->position('x', 'right')->position('y', 'top')
            ->dismissible(true)
            ->ripple(true)
            ->addWarning('Payment failed!');

        return redirect()->route('user.order');
    }
}
