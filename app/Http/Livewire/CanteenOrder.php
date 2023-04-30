<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\OrderGroup;
use Livewire\WithPagination;

class CanteenOrder extends Component
{
    use WithPagination;

    public function getListeners()
    {
        return [
            "echo:seller.". auth()->guard('canteen')->user()->id .",CanteenOrderPageEvent" => 'notifyNewOrder',
        ];
    }

    public function notifyNewOrder($payload)
    {
        $this->render();
    }

    public function render()
    {
        return view('livewire.canteen-order', [
            'orders' => OrderGroup::getAllOrders()->latest('created_at')->paginate(10),
        ]);
    }
}
