<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tabs extends Component
{
    public $activeTab = 0;
    public $tabs = [];

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function renderView($view)
    {
        return view($view);
    }
}
