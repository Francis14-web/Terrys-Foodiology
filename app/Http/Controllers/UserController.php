<?php

namespace App\Http\Controllers;

use App\Models\OrderGroup;

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

    public function order(){
        $order = OrderGroup::where([
            'customer_id' => auth()->guard('user')->user()->id,
            'status' => 'Not yet Paid',
        ])->whereDate('created_at', date('Y-m-d'))->first();
        return view('user.order', [
            'order' => $order,
        ]);
    }
}
