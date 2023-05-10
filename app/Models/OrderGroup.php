<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderGroup extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'total_price',
        'customer_id',
        'status',
        'pickup_date'
    ];

    protected $date = [
        'pickup_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public static function getAllOrders()
    {
        return self::select('order_groups.*', DB::raw('JSON_ARRAYAGG(orders.quantity) as order_quantity'), DB::raw('JSON_ARRAYAGG(foods.food_name) as food_name'), 'users.firstname', 'users.lastname')
            ->leftJoin('orders', 'orders.order_group_id', '=', 'order_groups.id')
            ->leftJoin('foods', 'foods.id', '=', 'orders.food_id')
            ->join('users', 'users.id', '=', 'order_groups.customer_id')
            ->latest('created_at')
            ->groupBy('order_groups.id')
            ->limit(10);
    }

    public static function getAllOrdersToday()
    {
        $userId = auth()->guard('canteen')->user()->id;

        return self::select('order_groups.*', DB::raw('JSON_ARRAYAGG(orders.quantity) as order_quantity'), 
            DB::raw('JSON_ARRAYAGG(foods.food_name) as food_name'), 
            DB::raw('SUM(orders.quantity * foods.food_price) as t_price'), 
            'users.firstname', 'users.lastname')
            ->leftJoin('orders', 'orders.order_group_id', '=', 'order_groups.id')
            ->leftJoin('foods', 'foods.id', '=', 'orders.food_id')
            ->join('users', 'users.id', '=', 'order_groups.customer_id')
            ->where('foods.owner_id', $userId)
            ->whereIn('order_groups.status', ['Serving', 'Failed'])
            ->groupBy('order_groups.id')
            ->whereDate('order_groups.created_at', today())
            ->limit(10);
    }

    public static function getAllSalesMonth($year, $month)
    {
        $userId = auth()->guard('canteen')->user()->id;

        return self::select('order_groups.*', DB::raw('JSON_ARRAYAGG(orders.quantity) as order_quantity'), DB::raw('JSON_ARRAYAGG(foods.food_name) as food_name'), 'users.firstname', 'users.lastname')
            ->leftJoin('orders', 'orders.order_group_id', '=', 'order_groups.id')
            ->leftJoin('foods', 'foods.id', '=', 'orders.food_id')
            ->join('users', 'users.id', '=', 'order_groups.customer_id')
            ->where('foods.owner_id', $userId)
            ->where(function($query) {
                $query->whereIn('order_groups.status', ['Success']);
            })
            ->whereBetween('order_groups.created_at', ["$year-$month-01", "$year-$month-31"])
            ->groupBy('order_groups.id')
            ->get()
            ->groupBy(function ($sale) {
                return $sale->created_at->toDateString();
            })
            ->map(function ($sales, $date) {
                $total = $sales->sum('total_price');
                return [
                    'id' => $date,
                    'title' => 'Sales',
                    'description' => '₱ ' . $total,
                    'date' => $date,
                ];
            })
            ->values();
    }

    public static function getAllOrdersWeek()
    {
        return self::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->get();
    }

    public static function getAllOrdersMonth()
    {
        return self::whereMonth('created_at', now()->month)->get();
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function getOrdersByCustomerId($customer_id)
    {
        return $this->query()
            ->where('customer_id', $customer_id);
    }
}

