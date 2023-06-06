<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Food extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'foods';

    protected $fillable = [
        'owner_id',
        'food_name',
        'food_description',
        'food_image',
        'food_price',
        'food_stock',
        'food_category',
        'food_rating',
    ];

    public static function left()
    {
        return self::All()->sum('food_stock');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'ownner_id');
    }
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
