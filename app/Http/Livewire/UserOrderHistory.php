<?php

namespace App\Http\Livewire;

use App\Models\OrderGroup;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ComponentColumn;

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
                'status' => 'Serving',
            ]);
    }

    public function columns(): array
    {
        return [
            ComponentColumn::make('Order ID', 'id')
                ->component('table-link')
                ->attributes(fn ($value, $row, Column $column) => [
                    'label' => "Order #" . substr($value, 0, 8),
                    'href' => route('user.order.view', $value),
                ]),
            Column::make("Total price", "total_price")
                ->sortable(),
            BooleanColumn::make("Status", "status")
                ->view('partials.status-widget')
                ->setCallback(function(string $value, $row) {
                    if ($value == 'Serving')
                        return true;
                    return false;
                })
                ->sortable(),
            Column::make("Ordered at", "created_at")
                ->sortable(),
            Column::make("Paid at", "updated_at")
                ->sortable(),
        ];
    }
}
