<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Admin;
use App\Models\OrderGroup;

class AdminController extends Controller
{
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
}
