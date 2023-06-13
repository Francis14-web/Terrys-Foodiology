<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\CarbonPeriod;

class InventoryRangeFilter extends Component
{
    public $start_date;
    public $end_date;
    public $dates = [];

    public function getDateRange()
    {
        $this->resetDateRange();

        if ($this->start_date == null && $this->end_date == null) {
            notyf()
                ->position('x', 'right')->position('y', 'top')
                ->dismissible(true)
                ->ripple(true)
                ->addWarning('Start Date and End Date Required');
            return;
        }

        if ($this->start_date == null && $this->end_date != null) {
            $this->start_date = $this->end_date;
        } else if ($this->end_date == null && $this->start_date != null) {
            $this->end_date = $this->start_date;
        }

        // IF start date is greater than end date
        if ($this->start_date > $this->end_date) {
            notyf()
                ->position('x', 'right')->position('y', 'top')
                ->dismissible(true)
                ->ripple(true)
                ->addWarning('Start Date cannot be greater than End Date');
            return;
        }

        $period = CarbonPeriod::create($this->start_date, $this->end_date);

        foreach ($period as $date) {
            $this->dates[] = $date->format('Y-m-d');
        }

    }

    public function resetDateRange()
    {
        $this->start_date = null;
        $this->end_date = null;
        $this->dates = [];
    }


    public function render()
    {
        return view('livewire.inventory-range-filter');
    }
}
