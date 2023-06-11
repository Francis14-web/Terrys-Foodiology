<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Inventory;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\ComponentColumn;

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
                ->hideIf(true),
            Column::make("Food Name", "food.food_name")
                ->sortable(),
            Column::make("Food stock", "food_stock")
                ->sortable(),
            Column::make("Food sold", "food_sold")
                ->sortable(),
            Column::make("Food left", "food_left")
                ->sortable(),
            Column::make("Added stocks at", "created_at")
                ->sortable()
                ->format(function ($value) {
                    return Carbon::parse($value)->format('F j, Y \a\t h:i A');
                }),
            ComponentColumn::make("Last stock update at", "updated_at")
                ->component('table-link')
                ->attributes(fn ($value, $row, Column $column) => 
                [
                    'label' => 'view: ' . Carbon::parse($value)->format('F j, Y \a\t h:i A'),
                    'href' => route('canteen.inventory.log', ['date' => Carbon::parse($value)->toDateString(), 'id' => $row->id]),
                ])
            
        ];
    }
}
