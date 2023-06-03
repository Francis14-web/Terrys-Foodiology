<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Admin;
use App\Models\OrderGroup;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    public function message()
    {
        $conversations = User::whereHas('messagesSent', function ($query) {
            $query->where([
                'recipient_id' => auth()->guard('admin')->user()->id,
                'recipient_type' => 'App\Models\Admin',
            ]);
        })->orWhereHas('messagesReceived', function ($query) {
            $query->where([
                'sender_id' => auth()->guard('admin')->user()->id,
                'sender_type' => 'App\Models\Admin',
            ]);
        })->get();

        return view('admin.message', compact('conversations'));
    }

    public function conversation($user){
        $conversations = User::whereHas('messagesSent', function ($query) {
            $query->where([
                'recipient_id' => auth()->guard('admin')->user()->id,
                'recipient_type' => 'App\Models\Admin',
            ]);
        })->orWhereHas('messagesReceived', function ($query) {
            $query->where([
                'sender_id' => auth()->guard('admin')->user()->id,
                'sender_type' => 'App\Models\Admin',
            ]);
        })->get();

        $target = User::where('id', $user)->first();
        $user = User::where('id', $user)->first();

        return view('admin.conversation', compact('conversations','target', 'user'));
    }

    public function profile() {
        return view('admin.profile');
    }

    public function dashboard(){
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $statistics = OrderGroup::adminStatistics($year, $month);
        $yearlySales = OrderGroup::getAllTotalPerYear();
        $monthlySales = OrderGroup::getAllTotalPerMonth();
        $weeklySales = OrderGroup::getAllTotalPerWeek();

        return view('admin.dashboard', [
            'statistics' => $statistics,
            'yearlySales' => $yearlySales,
            'monthlySales' => $monthlySales,
            'weeklySales' => $weeklySales
        ]);
    }

    public function user(){
        $users = User::all();
        return view('admin.user', [
            'users' => $users
        ]);
    }

    public function order(){
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $statistics = OrderGroup::statistics($year, $month);

        return view('admin.order', [
            'statistics' => $statistics,
        ]);
    }

    public function testPrinting(){
        $pdf = Pdf::loadView('print.test');
        return $pdf->stream("test.pdf", array("Attachment" => 0));
    }
}
