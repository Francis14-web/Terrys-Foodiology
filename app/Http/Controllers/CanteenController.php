<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Admin;
use App\Models\Inventory;
use App\Models\OrderGroup;

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

    public function inventory($date){
        $formattedDate = Carbon::parse($date)->format('F j, Y');
        $inventory = Inventory::whereDate('created_at', $date)->get();
        return view('canteen.inventory', compact('inventory', 'formattedDate', 'date'));
    }

    public function logs($date, $id) {
        // $formattedDate = Carbon::parse($date)->format('F j, Y');
        // $inventory = Inventory::whereDate('created_at', $date)->get();

        // dd ($date, $id);
        return view('canteen.log', compact('date', 'id'));
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

        if ($conversations->count() > 0)
            return redirect()->route('canteen.conversation', $conversations->first()->id);
        else
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

    public function viewOrder(OrderGroup $orders) {
        $data = $orders->id;
        return view('canteen.view-order', compact('data'));
    }

    public function order() {
        $user = auth()->guard('canteen')->user()->id;
        return view('canteen.order', compact('user'));
    }

}
