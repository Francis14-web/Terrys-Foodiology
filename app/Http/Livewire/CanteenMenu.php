<?php

namespace App\Http\Livewire;

use App\Models\Food;
use Livewire\Component;

class CanteenMenu extends Component
{
    public $category = "";

    public $listeners = [
        'refreshMenu' => 'render',
    ];

    public function delete($id)
    {
        $food = Food::find($id);
        $food->delete();
        $this->emit('refreshMenu');
    }

    public function change($category)
    {
        $this->category = $category;
    }

    public function render()
    {
        $foods = Food::where('owner_id', auth()->guard('canteen')->user()->id);
        
        return view('livewire.canteen-menu', [
            'foods' => $foods->get(),
        ]);
    }
}
