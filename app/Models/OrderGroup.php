<?php

namespace App\Models;

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
    ];

    public static function getAllOrders()
    {
        return self::latest('created_at')->limit(10);
    }

    public static function getAllOrdersToday()
    {
        return self::whereDate('created_at', today())->get();
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

    public function getOrdersByCustomerId($customer_id)
    {
        return $this->query()
            ->where('customer_id', $customer_id);
    }

    
}

