<?php

namespace App\Models;

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
}
