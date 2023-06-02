<?php

namespace App\Http\Livewire;

use App\Models\Food;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class UserMenu extends Component
{
    public $category = "";
    public $search = "";
    public $opening_time;
    public $closing_time;
    public $current_time;
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public function getListeners()
    {
        return [
            "echo:user-menu-page,UserMenuPageEvent" => 'updateFoodMenu',
        ];
    }

    public function updateFoodMenu()
    {
        $this->render();
    }

    public function change($category)
    {
        $this->category = $category;
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function openFood($id)
    {
        return redirect()->route('user.menu.view', $id);
    }

    public function render()
    {
        $operation_hour = DB::table('operation_hour')->first(); 
        $this->opening_time = $operation_hour->opening_time;
        $this->closing_time = $operation_hour->closing_time;
        $this->current_time = date('H:i:s');

        if ($this->current_time < $this->opening_time || $this->current_time > $this->closing_time) {
            // Display "Oops, we are closed" message
            return view('livewire.user-menu-closed');
        }

        $query = Food::query();

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
