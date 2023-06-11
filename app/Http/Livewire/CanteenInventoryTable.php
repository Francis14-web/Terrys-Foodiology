<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Inventory;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class CanteenInventoryTable extends DataTableComponent
{
    protected $model = Inventory::class;
    public $date;

    public function mount($date)
    {
        $this->date = $date;
    }

    public function builder(): Builder
    {
        $start = Carbon::createFromFormat('Y-m-d H:i:s', $this->date . ' 00:00:00');
        $end = Carbon::createFromFormat('Y-m-d H:i:s', $this->date . ' 23:59:59');

        return Inventory::query()
            ->join('foods', 'inventories.food_uuid', '=', 'foods.id')
            ->whereBetween('inventories.created_at', [$start, $end]);
    }



    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->isHidden(true),
            Column::make("Food Name", "food.food_name")
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
