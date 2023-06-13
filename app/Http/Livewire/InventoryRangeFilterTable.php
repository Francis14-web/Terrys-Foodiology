<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Inventory;
use Illuminate\Database\Eloquent\Builder;

class InventoryRangeFilterTable extends DataTableComponent
{
    protected $model = Inventory::class;
    public $date;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function mount($date){
        $this->date = $date;
    }

    public function builder(): Builder
    {
        return Inventory::query()
            ->join('foods', 'inventories.food_uuid', '=', 'foods.id')
            ->whereDate('inventories.created_at', '=', $this->date);
    }


    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Food name", "food.food_name")
                ->sortable(),
            Column::make("Food stock", "food_stock")
                ->sortable(),
            Column::make("Food sold", "food_sold")
                ->sortable(),
            Column::make("Food left", "food_left")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
