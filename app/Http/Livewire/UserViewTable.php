<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Order;

class UserViewTable extends DataTableComponent
{
    protected $model = Order::class;
    public $order_groud_id;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function builder(): Builder
    {
        return Order::query()
            ->join('order_groups', 'orders.order_group_id', '=', 'order_groups.id')
            ->where([
                'order_group_id' => $this->order_groud_id,
            ])
            ->withTrashed();
    }

    public function mount($data)
    {
        $this->order_groud_id = $data;
    }

    public function columns(): array
    {
        return [
            Column::make("Food name", "food.food_name")
                ->sortable()
                ->searchable(),
            Column::make("Quantity", "quantity")
                ->sortable()
                ->collapseOnTablet(),
            Column::make("Price", "food.food_price")
                ->sortable()
                ->collapseOnTablet(),
            Column::make("Total Price", "price")
                ->sortable(),
            Column::make("Order added at", "created_at")
                ->sortable()
                ->collapseOnTablet(),
        ];
    }
}
