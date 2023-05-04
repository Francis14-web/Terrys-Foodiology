<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class OrderTable extends DataTableComponent
{
    protected $model = Order::class;

    public array $bulkActions = [
        'deleteSelected' => 'Delete',
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id')
             ->setBulkActionsEnabled();

    }

    public function deleteSelected()
    {
        foreach($this->getSelected() as $item)
        {
            Order::find($item)->delete();
        }

    }

    public function builder(): Builder
    {
        return Order::query()
            ->join('order_groups', 'orders.order_group_id', '=', 'order_groups.id')
            ->where([
                'order_groups.status' => 'Not yet Paid',
                'orders.customer_id' => auth()->guard('user')->user()->id,
            ])
            ->whereDate('orders.created_at', today());
    }

    public function columns(): array
    {
        return [
            Column::make("Order ID", "id")
                ->hideIf(true), // hide this column
            Column::make("Food name", "food.food_name")
                ->sortable()
                ->searchable(),
            Column::make("Quantity", "quantity")
                ->sortable()
                ->collapseOnTablet(),
            Column::make("Price", "price")
                ->sortable()
                ->collapseOnTablet(),
            Column::make("Created at", "created_at")
                ->sortable()
                ->collapseOnTablet(),
        ];
    }
}
