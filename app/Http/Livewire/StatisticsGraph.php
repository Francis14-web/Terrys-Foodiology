<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StatisticsGraph extends Component
{
    public $activeGraph = 0;
    public $graphs = [];

    public function setActiveGraph($graph)
    {
        $this->activeGraph = $graph;
    }


    public function renderView($view)
    {
        return view($view);
    }
}
