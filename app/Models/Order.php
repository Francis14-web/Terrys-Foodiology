<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'food_id',
        'quantity',
        'price',
        'customer_id',
        'order_group_id',
    ];

    public function order_groups()
    {
        return $this->belongsTo(OrderGroup::class);
    }

    public function orderGroup()
    {
        return $this->belongsTo(OrderGroup::class);
    }

    public function food()
    {
        return $this->belongsTo(Food::class);
    }

    public static function topFood()
    {
        return self::query()
        ->join('foods', 'orders.food_id', '=', 'foods.id')
        ->select('foods.food_name', DB::raw('SUM(orders.price) as total_price'), DB::raw('SUM(orders.quantity) as total_quantity'))
        ->whereHas('orderGroup', function ($query) {
            $query->where('status', 'Success');
        })
        ->groupBy('foods.id')
        ->orderByDesc('total_quantity')
        ->limit(10)
        ->get();
    }
}
