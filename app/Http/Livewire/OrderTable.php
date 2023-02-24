<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Order;
use Illuminate\Database\Eloquent\Builder;

class OrderTable extends DataTableComponent
{
    protected $model = Order::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Food name", "food.food_name")
                ->sortable()
                ->searchable(),
            Column::make("Quantity", "quantity")
                ->sortable(),
            Column::make("Price", "price")
                ->sortable(),
        ];
    }
    public function customView(): string
    {
        return 'includes.totalOrder';
    }
}
