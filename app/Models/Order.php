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
        'customer_id',
        'group_order_id',
    ];

    public function order_groups()
    {
        return $this->belongsTo(OrderGroup::class);
    }
}
