<?php

namespace App\Http\Livewire;

use App\Models\Inventory;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use Illuminate\Support\Collection;

class InventoryCalendar extends LivewireCalendar
{
    public function events() : Collection
    {
        return Inventory::inventoryAll();
    }

    public function onEventClick($eventId)
    {
        return redirect()->route('canteen.inventory', $eventId);
    }
}
