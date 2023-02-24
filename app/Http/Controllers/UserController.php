<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

class UserController extends Controller
{
    public function dashboard(){
        return view('user.dashboard');
    }

    public function menu(){
        return view('user.menu');
    }

    public function order(){
        return view('user.order');
    }
}
