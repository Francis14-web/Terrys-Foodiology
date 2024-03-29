<?php

namespace App\Http\Livewire;

use App\Models\Log;
use App\Models\Food;
use App\Models\Inventory;
use App\Events\UserMenuPageEvent;
use LivewireUI\Modal\ModalComponent;

class AddToInventory extends ModalComponent
{
    public $food_stock; 
    public $food_uuid;

    public function addToInventory(){
        // Check if food already exists in inventory and the created_at is now (today)
        if ($this->food_stock <= 0) {
            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->addError('Please enter a valid quantity');
            return;
        }

        $inventory = Inventory::where('food_uuid', $this->food_uuid)->whereDate('created_at', date('Y-m-d'))->first();

        if ($inventory) {
            $inventory->food_stock = $inventory->food_stock + $this->food_stock;
            $inventory->food_left = $inventory->food_left + $this->food_stock;
            $inventory->save();

            $food = Food::find($this->food_uuid);
            $food->food_stock = $food->food_stock + $this->food_stock;
            $food->save();

            Log::create([
                'log_inventory_id' => $inventory->id,
                'log_job' => 'Added',
                'log_stock' => $this->food_stock,
                'log_description' => 'Added ' . $this->food_stock . ' ' . $food->food_name . ' to inventory',
            ]);

            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->addSuccess('Food added to inventory for today');
        } else {
            Inventory::create([
                'food_uuid' => $this->food_uuid,
                'food_stock' => $this->food_stock,
                'food_sold' => 0,
                'food_left' => $this->food_stock,
            ]);
    
            $food = Food::find($this->food_uuid);
            $food->food_stock = $this->food_stock;
            $food->save();

            $inventoryId = Inventory::where('food_uuid', $this->food_uuid)->whereDate('created_at', date('Y-m-d'))->first()->id;

            Log::create([
                'log_inventory_id' => $inventoryId,
                'log_job' => 'Added',
                'log_stock' => $this->food_stock,
                'log_description' => 'Added ' . $this->food_stock . ' ' . $food->food_name . ' to inventory',
            ]);

            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->addSuccess('Food added to inventory for today');
        }

        event(new UserMenuPageEvent()); // Broadcast the new menu to user

        $this->closeModal();
    }

    public function mount(Food $food){
        $this->food_stock = 0;
        $this->food_uuid = $food->id;
    }

    public function render()
    {
        return view('livewire.add-to-inventory');
    }
}
