<?php

namespace App\Http\Livewire;

use App\Models\Food;
use LivewireUI\Modal\ModalComponent;

class AddUserOrder extends ModalComponent
{
    public Food $food;
    public $image;

    public function mount(Food $food)
    {
        $this->food = $food; 
        $imagePaths = explode(',', $food->food_image);
        $lastImagePath = end($imagePaths);
        $this->image = $lastImagePath;
    }

    public function render()
    {
        return view('livewire.add-user-order');
    }
}
