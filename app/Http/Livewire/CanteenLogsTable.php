<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Log;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class CanteenLogsTable extends DataTableComponent
{
    protected $model = Log::class;
    public $date;
    public $inventoryId;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function mount($date, $id)
    {
        $this->date = $date;
        $this->inventoryId = $id;
    }


    public function builder(): Builder
    {
        $start = Carbon::createFromFormat('Y-m-d H:i:s', $this->date . ' 00:00:00');
        $end = Carbon::createFromFormat('Y-m-d H:i:s', $this->date . ' 23:59:59');
    
        return Log::query()
            ->join('inventories as inv', 'logs.log_inventory_id', '=', 'inv.id')
            ->where('logs.log_inventory_id', $this->inventoryId)
            ->whereBetween('logs.created_at', [$start, $end]);
    }


    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->hideIf(true),
            //     ->sortable(),
            Column::make("Log job", "log_job")
                ->sortable(),
            Column::make("Log stock", "log_stock")
                ->sortable(),
            Column::make("Log description", "log_description")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable()
                ->format(function ($value) {
                    return Carbon::parse($value)->format('F j, Y \a\t h:i A');
                }),
            Column::make("Updated at", "updated_at")
                ->sortable()
                ->format(function ($value) {
                    return Carbon::parse($value)->format('F j, Y \a\t h:i A');
                }),
        ];
    }
}
