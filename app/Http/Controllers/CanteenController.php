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
}
