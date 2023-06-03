<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\OrderGroup;
use Illuminate\Foundation\Auth\User;

use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\ComponentColumn;

class SalesTable extends DataTableComponent
{
    protected $model = OrderGroup::class;
    public $date;

    public function mount($date)
    {
        $this->date = $date;
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function builder(): Builder
    {
        $start = Carbon::createFromFormat('Y-m-d H:i:s', $this->date . ' 00:00:00');
        $end = Carbon::createFromFormat('Y-m-d H:i:s', $this->date . ' 23:59:59');

        return OrderGroup::query()
            ->whereBetween('created_at', [$start, $end])
            ->where('status', 'Success');
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
            Column::make("Customer id", "customer_id")
                ->format(function ($value, $row) {
                    return $row->user->firstname . " " . $row->user->lastname;
                }),
            Column::make("Ordered at", "created_at")
                ->sortable()
                ->format(function ($value) {
                    return Carbon::parse($value)->format('F j, Y g:i A');
                }),
            Column::make("Pickup date", "pickup_date")
                ->sortable()
                ->format(function ($value) {
                    return Carbon::parse($value)->format('F j, Y g:i A');
                }),
            Column::make("Picked up at", "updated_at")
                ->sortable()
                ->format(function ($value) {
                    return Carbon::parse($value)->format('F j, Y g:i A');
                }),
            Column::make("Total price", "total_price")
                ->sortable()
                ->format(function ($value) {
                    return "₱ " . number_format($value, 2);
                }),
        ];
    }
}
