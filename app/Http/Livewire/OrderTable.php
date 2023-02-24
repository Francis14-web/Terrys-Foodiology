<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;

class OrderTable extends DataTableComponent
{
    protected $model = Order::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setFooterEnabled();
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
}
