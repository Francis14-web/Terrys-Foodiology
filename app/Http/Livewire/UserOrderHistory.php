<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\OrderGroup;
use Illuminate\Database\Eloquent\Builder;

class UserOrderHistory extends DataTableComponent
{
    protected $model = OrderGroup::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function builder(): Builder
    {
        return OrderGroup::query()
            ->where([
                'customer_id' => auth()->guard('user')->user()->id,
            ]);
    }

    public function columns(): array
    {
        return [
            Column::make("Order ID", "id")
                ->sortable(),
            Column::make("Total price", "total_price")
                ->sortable(),
            // Column::make("Customer id", "customer_id")
            //     ->sortable(),
            Column::make("Status", "status")
                ->sortable(),
            Column::make("Ordered at", "created_at")
                ->sortable(),
            Column::make("Paid at", "updated_at")
                ->sortable(),
        ];
    }
}
