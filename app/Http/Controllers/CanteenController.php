<?php

namespace App\Http\Controllers;

use App\Models\Canteen;
use App\Http\Requests\StoreCanteenRequest;
use App\Http\Requests\UpdateCanteenRequest;

class CanteenController extends Controller
{
    public function dashboard(){
        return view('canteen.dashboard');
    }

    public function menu() {
        return view('canteen.menu');
    }

    public function pos() {
        return view('canteen.pos');
    }

    public function order() {
        $user = auth()->guard('canteen')->user()->id;
        return view('canteen.order', compact('user'));
    }

}
