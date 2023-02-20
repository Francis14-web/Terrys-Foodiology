<?php

namespace App\Http\Livewire;

use App\Models\Food;
use Livewire\WithFileUploads;
use App\Http\Livewire\CanteenMenu;
use LivewireUI\Modal\ModalComponent;

class EditFoodModal extends ModalComponent
{
    use WithFileUploads;

    public $food_name;
    public $food_price;
    public $food_description;
    public $food_image;
    public $food_category = 'Rice Meal';
    public $food_id;
    public $existing_images = [];
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
            'food_image.*' => 'required|image|max:1024', // 1MB Max
        ];
    }

    public function loadExistingImages($food_id)
    {
        $food = Food::find($food_id);

        if ($food) {
            $this->food_image = null; // Reset the file input field
            $this->existing_images = explode(',', $food->food_image);
        }
    }

    public function updateFood (){
        $validatedData = $this->validate();
        $food = Food::find($this->food_id);
        $imagePaths = [];
        if ($this->food_image) {
            foreach ($this->food_image as $image) {
                if ($image) {
                    try {
                        $path = $image->store('photos');
                        array_push($imagePaths, $path);
                    } catch (\Exception $e) {
                        dd($e);
                    }
                } else {
                    dd($image->getError());
                }
            }
        }

        $images = array_unique(array_merge($this->existing_images, $imagePaths));

        $data = [
            'food_name' => $this->food_name,
            'food_price' => $this->food_price,
            'food_description' => $this->food_description,
            'food_category' => $this->food_category,
            'food_image' => implode(',', $images),
        ];

        $food->update($data);

        $this->closeModalWithEvents([
            CanteenMenu::getName() => 'refreshMenu',
        ]);
    }

    public function mount(Food $food)
    {
        $this->food_id = $food->id;
        $this->food_name = $food->food_name;
        $this->food_price = $food->food_price;
        $this->food_description = $food->food_description;
        $this->food_category = $food->food_category;
        $this->food_image = null;
        $this->existing_images = explode(',', $food->food_image);
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function deleteImage($image)
    {
        $this->existing_images = array_diff($this->existing_images, [$image]);
    }

    public function render()
    {
        $foods = Food::all();
        return view('livewire.edit-food-modal', [
            'categories' => $this->categories,
        ]);
    }
}
