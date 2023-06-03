<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Admin;
use App\Models\OrderGroup;

class AdminController extends Controller
{
    public function message() {
        return view('admin.message');
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
        $orders = OrderGroup::all();
        return view('admin.order', [
            'orders' => $orders
        ]);
    }
}
