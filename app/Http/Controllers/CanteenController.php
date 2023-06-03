<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\OrderGroup;
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

    public function message()
    {
        $conversations = User::whereHas('messagesSent', function ($query) {
            $query->where([
                'recipient_id' => auth()->guard('canteen')->user()->id,
                'recipient_type' => 'App\Models\Canteen',
            ]);
        })->orWhereHas('messagesReceived', function ($query) {
            $query->where([
                'sender_id' => auth()->guard('canteen')->user()->id,
                'sender_type' => 'App\Models\Canteen',
            ]);
        })->get();

        return view('canteen.message', compact('conversations'));
    }

    public function setting() {
        return view('canteen.setting');
    }

    public function conversation($user){
        $conversations = User::whereHas('messagesSent', function ($query) {
            $query->where([
                'recipient_id' => auth()->guard('canteen')->user()->id,
                'recipient_type' => 'App\Models\Canteen',
            ]);
        })->orWhereHas('messagesReceived', function ($query) {
            $query->where([
                'sender_id' => auth()->guard('canteen')->user()->id,
                'sender_type' => 'App\Models\Canteen',
            ]);
        })->get();

        $target = User::where('id', $user)->first();
        $user = User::where('id', $user)->first();

        return view('canteen.conversation', compact('conversations','target', 'user'));
    }

    public function sales() {
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $statistics = OrderGroup::statistics($year, $month);

        return view('canteen.sales', [
            'statistics' => $statistics,
        ]);
    }

    public function salesOverview($date){
        $formattedDate = Carbon::parse($date)->format('F j, Y');
        return view('canteen.sales-overview', compact('formattedDate', 'date'));
    }

    public function order() {
        $user = auth()->guard('canteen')->user()->id;
        return view('canteen.order', compact('user'));
    }

}
