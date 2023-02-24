<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\OrderGroup;
use Illuminate\Database\Eloquent\Builder;

class OrderGroupTable extends DataTableComponent
{
    protected $model = OrderGroup::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function builder(): Builder
    {
        
    }

    public function columns(): array
    {
        return [
            Column::make("Total price", "total_price")
                ->sortable(),
            Column::make("Customer id", "customer_id")
                ->sortable(),
            Column::make("Status", "status")
                ->sortable(),
        ];
    }
}
