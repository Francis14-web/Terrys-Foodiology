<?php

namespace App\Http\Controllers;

use App\Models\Canteen;
use App\Http\Requests\StoreCanteenRequest;
use App\Http\Requests\UpdateCanteenRequest;
use Carbon\Carbon;

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

    public function sales() {
        return view('canteen.sales');
    }

    public function salesOverview($date){
        $formattedDate = Carbon::parse($date)->format('F j, Y');
        return view('canteen.sales-overview', compact('formattedDate'));
    }

    public function order() {
        $user = auth()->guard('canteen')->user()->id;
        return view('canteen.order', compact('user'));
    }

}
