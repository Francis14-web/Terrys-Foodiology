<?php

namespace App\Http\Livewire;

use App\Models\Food;
use Livewire\Component;
use Livewire\WithPagination;

class UserMenu extends Component
{
    public $category = "";
    public $search = "";
    use WithPagination;

    protected $paginationTheme = 'tailwind';

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
        $query = Food::query(); // use query builder instead of all()

        if (!empty($this->category)) {
            $query = $query->where('food_category', $this->category);
        }

        $foods = $query->search([
                'food_name',
            ], $this->search)
            ->orderBy('food_name')
            ->paginate(10);

        return view('livewire.user-menu', [
            'foods' => $foods,
        ]);

    }
}
