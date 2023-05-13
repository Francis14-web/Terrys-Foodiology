<?php

namespace App\Http\Livewire;

use App\Models\OrderGroup;
use Carbon\Carbon;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use Illuminate\Support\Collection;

class CanteenSalesCalendar extends LivewireCalendar
{
    public $month;
    public $year;

    public function goToPreviousMonth()
    {
        $this->startsAt->subMonthNoOverflow();
        $this->endsAt->subMonthNoOverflow();

        $data = [
            'month' => intval($this->startsAt->format('m')),
            'year' => intval($this->startsAt->format('Y')),
        ];

        $this->month = $data['month'];
        $this->year = $data['year'];

        $this->emit('renderMonth', $data);
        $this->calculateGridStartsEnds();
    }

    public function goToNextMonth()
    {
        $this->startsAt->addMonthNoOverflow();
        $this->endsAt->addMonthNoOverflow();

        $data = [
            'month' => intval($this->startsAt->format('m')),
            'year' => intval($this->startsAt->format('Y')),
        ];

        $this->month = $data['month'];
        $this->year = $data['year'];

        $this->emit('renderMonth', $data);
        $this->calculateGridStartsEnds();
    }

    public function events() : Collection
    {
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        return OrderGroup::getAllSalesMonth($year, $month);
        // must return a Laravel collection
    }

    public function onEventClick($eventId)
    {
        // implement what happens on event click here
        return redirect()->route('canteen.sales.view', $eventId);
    }
}