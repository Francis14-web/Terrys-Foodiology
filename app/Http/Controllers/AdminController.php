<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Food;
use App\Models\User;
use App\Models\Admin;
use App\Models\Order;
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
        $topProducts = Order::topFood();
        $totalProductSold = Order::topFood()->sum('total_quantity');

        $totalProductLeft = Food::left();


        $totalStockForProducts = Food::select('food_name', 'food_stock')->where('food_stock', '>', '0')->orderBy('food_stock', 'desc')->get();
        

        
        return view('admin.dashboard', [
            'statistics' => $statistics,
            'yearlySales' => $yearlySales,
            'monthlySales' => $monthlySales,
            'weeklySales' => $weeklySales,
            'totalStockForProducts' => $totalStockForProducts,
            'topProducts' => $topProducts,
            'totalProductSold' => $totalProductSold,
            'totalProductLeft' => $totalProductLeft,
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

    public function salesOverview($date){
        $formattedDate = Carbon::parse($date)->format('F j, Y');
        return view('admin.sales-overview', compact('formattedDate', 'date'));
    }

    public function viewOrder(OrderGroup $orders) {
        $data = $orders->id;
        return view('admin.view-order', compact('data'));
    }
    
    public function printingDaily()
    {
        $date = today();
        $data = OrderGroup::getAllOrdersTodayPrinting($date)->get();
        
        // Calculate the total price
        $totalPrice = $data->sum('total_price');

        $pdf = Pdf::loadView('print.printing-daily', compact('data', 'totalPrice'));
        return $pdf->stream("daily.pdf", ["Attachment" => 0]);
    }

}
