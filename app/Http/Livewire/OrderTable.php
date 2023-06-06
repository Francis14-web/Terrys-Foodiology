<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderGroup;
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
        if (empty($this->getSelected())) {
            return;
        }

        $orderId = ''; // Initialize $orderId

        foreach($this->getSelected() as $item)
        {
            $order = Order::find($item);

            // Check if $order exists
            if ($order) {
                $orderGroup = $order->orderGroup; // Retrieve the order_group relationship
                
                // Check if $orderGroup exists
                if ($orderGroup) {
                    $orderGroup->total_price -= $order->price; // Subtract the order price from total_price
                    $orderGroup->save(); // Save the updated total_price
                }
                $orderId = $order->order_group_id; // Set $orderId to the current order_group_id
                $order->delete();
            }
        }
        dd ($orderId);
        $this->emit('refreshCart');
    }

    public function builder(): Builder
    {
        return Order::query()
            ->join('order_groups', 'orders.order_group_id', '=', 'order_groups.id')
            ->where([
                'order_groups.status' => 'Cart',
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
            Column::make("Added at", "created_at")
                ->sortable()
                ->collapseOnTablet(),
        ];
    }
}
