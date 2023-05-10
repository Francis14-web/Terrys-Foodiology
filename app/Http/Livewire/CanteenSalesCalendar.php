<?php

namespace App\Http\Livewire;

use App\Models\OrderGroup;
use Carbon\Carbon;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use Illuminate\Support\Collection;

class CanteenSalesCalendar extends LivewireCalendar
{
    public function events() : Collection
    {
        return OrderGroup::getAllSalesMonth(2023, 5);

        // must return a Laravel collection
    }

    public function onEventClick($eventId)
    {
        // implement what happens on event click here
        return redirect()->route('canteen.sales.view', $eventId);
    }
}