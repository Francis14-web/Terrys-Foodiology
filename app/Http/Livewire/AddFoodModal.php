<?php

namespace App\Http\Livewire;

use Log;
use App\Models\Food;
use Livewire\WithFileUploads;
use App\Http\Livewire\CanteenMenu;
use LivewireUI\Modal\ModalComponent;


class AddFoodModal extends ModalComponent
{
    use WithFileUploads;

    public $food_name;
    public $food_price;
    public $food_description;
    public $food_image;
    public $food_category = 'Rice Meal';
    public $food_stock = 0;
    public $is_restocked_everyday = 'Yes';
    public $categories = [
        'Rice Meal',
        'Pasta',
        'Snacks',
        'Coffee',
        'Drinks',
        'Desserts',
    ];

    public function rules (){
        return [
            'food_name' => 'required|min:3|max:50',
            'food_price' => 'required|numeric|min:0|max:300',
            'food_description' => 'required|min:3|max:500',
            'food_category' => 'required',
            'is_restocked_everyday' => 'required',
            'food_image' => 'required|image|max:1024', // 1MB Max
        ];
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function save()
    {
        $this->validate();

        $food = new Food();
        $food->food_name = $this->food_name;
        $food->food_price = $this->food_price;
        $food->food_description = $this->food_description;
        $food->food_category = $this->food_category;
        $food->owner_id = auth()->guard('canteen')->user()->id;
        $food->food_rating = 0;
        $food->food_stock = 0;
        $food->is_restocked_everyday = ($this->is_restocked_everyday == 'Yes') ? true : false;
        if ($this->food_image) { 
            try {
                $originalName = $this->food_image->getClientOriginalName();
                $extension = $this->food_image->getClientOriginalExtension();
                $fileName = $originalName . '.' . $extension;
                $path = $this->food_image->storeAs('photos', $fileName);
                $food->food_image = $path;
            } catch (\Exception $e) {
                dd($e);
            }
        }
        // $food->food_image = implode(',', $imagePaths);
        $food->save();

        $this->closeModalWithEvents([
            CanteenMenu::getName() => 'refreshMenu'
        ]);
    }


    public function render()
    {
        $foods = Food::all();
        return view('livewire.add-food-modal', [
            'categories' => $this->categories,
        ]);
    }
}
