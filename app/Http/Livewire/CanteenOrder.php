<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CanteenOrder extends Component
{
    public function getListeners()
    {
        return [
            "echo:seller.". auth()->guard('canteen')->user()->id .",CanteenOrderPageEvent" => 'notifyNewOrder',
        ];
    }

    public function notifyNewOrder($payload)
    {
        dd ('new order', $payload);
    }

    public function render()
    {
        return view('livewire.canteen-order');
    }
}
