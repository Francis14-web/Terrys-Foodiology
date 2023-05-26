<?php

namespace App\Http\Livewire;

use App\Models\Food;
use Livewire\Component;
use Livewire\WithPagination;

class PointOfSale extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public $category = 'Rice Meal';
    public $search = "";

    public function updatedSearch()
    {
        $this->resetPage();
    }
    
    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function createOrder(){
        // Order
    }

    public function render()
    {
        $query = Food::where('owner_id', auth()->guard('canteen')->user()->id);

        if (!empty($this->category)) {
            $query = $query->where('food_category', $this->category);
        }

        $foods = $query->search([
                'food_name',
            ], $this->search)
            ->orderBy('food_name')
            ->paginate(10);

        return view('livewire.point-of-sale', [
            'foods' => $foods,
        ]);
    }
}
