<?php

namespace App\Http\Livewire;

use App\Models\Food;
use Livewire\Component;
use Livewire\WithPagination;

class CanteenMenu extends Component
{
    public $category = "";
    public $search = "";
    use WithPagination;

    protected $paginationTheme = 'tailwind';

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

    public function updatedSearch()
    {
        $this->resetPage();
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
            ->paginate(1);

        return view('livewire.canteen-menu', [
            'foods' => $foods,
        ]);

    }
}
