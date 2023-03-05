<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class OrderTable extends DataTableComponent
{
    protected $model = Order::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setFooterEnabled();
    }

    public function builder(): Builder
    {
        return Order::query()
            ->join('order_groups', 'orders.order_group_id', '=', 'order_groups.id')
            ->where('order_groups.status', 'Not yet Paid')
            ->whereDate('orders.created_at', today());
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
            Column::make("Created at", "created_at")
                ->sortable(),
        ];
    }
}
