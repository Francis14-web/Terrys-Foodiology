<?php

namespace App\Http\Livewire;

use App\Models\Log;
use App\Models\Inventory;
use App\Models\OrderGroup;
use App\Events\UserMenuPageEvent;
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

            $inventory = Inventory::where('food_uuid', $food->id)->first();
            Log::create([
                'log_inventory_id' => $inventory->id,
                'log_job' => 'Purchased',
                'log_stock' => $order->quantity,
                'log_description' => 'User purchased ' . $order->quantity . ', ' . $food->food_name . ' stock(s) deducted to inventory',
            ]);
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
