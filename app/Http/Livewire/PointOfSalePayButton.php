<?php

namespace App\Http\Livewire;

use App\Events\UserMenuPageEvent;
use App\Models\OrderGroup;
use LivewireUI\Modal\ModalComponent;

class PointOfSalePayButton extends ModalComponent
{
    public OrderGroup $order;

    public $cash = 0;
    public $change = 0;

    public function addMoney($val){
        $this->cash += $val;
        $this->change = $this->cash - $this->order->total_price ;
    }

    public function markAsPaid(){
        $this->order->status = "Success";

        // Reduce the stock of foods
        foreach ($this->order->orders as $order) {
            $food = $order->food;
            $food->food_stock -= $order->quantity;
            $food->save();
        }
        
        $this->order->save();

        event(new UserMenuPageEvent());

        $this->emit('transactionCompleted');
        $this->closeModal();
    }

    public function mount(OrderGroup $order){
        $this->order = $order;
    }

    public function render()
    {

        return view('livewire.point-of-sale-pay-button');
    }
}
