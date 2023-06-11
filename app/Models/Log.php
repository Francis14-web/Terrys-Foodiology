<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'log_inventory_id',
        'log_job',
        'log_stock',
        'log_description',
    ];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
}
