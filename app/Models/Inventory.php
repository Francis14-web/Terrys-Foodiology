<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = ['food_uuid', 'food_stock', 'food_sold', 'food_left' ];

    public static function inventoryAll(): Collection
    {
        $uniqueDates = Inventory::select(DB::raw('DATE(created_at) as date'))
            ->distinct()
            ->get();

        $inventoryData = collect([]);

        foreach ($uniqueDates as $date) {
            $inventoryData->push([
                'id' => $date->date,
                'date' => $date->date,
                'description' => 'Click to view inventory',
                'title' => 'Open',
            ]);
        }
        return $inventoryData;
    }

    public function food(){
        return $this->belongsTo(Food::class);
    }
}
