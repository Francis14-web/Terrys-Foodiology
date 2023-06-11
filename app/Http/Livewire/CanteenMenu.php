<?php

namespace App\Http\Livewire;

use App\Models\Food;
use Livewire\Component;
use Livewire\WithPagination;
use App\Events\UserMenuPageEvent;

class CanteenMenu extends Component
{
    public $category = "";
    public $search = "";
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $listeners = [
        'refreshMenu' => 'render',
    ];
    
    public function getListeners()
    {
        return [
            "echo:canteen-menu-". auth()->guard('canteen')->user()->id .",CanteenMenuPageEvent" => 'updateMenu',
        ];
    }

    public function delete($id)
    {
        $food = Food::find($id);
        $food->delete();
        $this->emit('refreshMenu');
    }

    public function change($category)
    {
        $this->resetPage();
        $this->category = $category;
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function reduceQuantity(Food $food){
        if ($food->food_stock == 0) {
            return;
        }
        $food->food_stock = $food->food_stock - 1;
        $food->save();
        $this->emit('refreshMenu');
        event(new UserMenuPageEvent());
    }

    public function increaseQuantity(Food $food){
        $food->food_stock = $food->food_stock + 1;
        $food->save();
        $this->emit('refreshMenu');
        event(new UserMenuPageEvent());
    }

    public function inputQuantity(Food $food, $newQuantity){
        if ($newQuantity < 0) {
            return;
        }

        // if input is not a number, return
        if (!is_numeric($newQuantity)) {
            return;
        }

        $food->food_stock = $newQuantity;
        $food->save();
        $this->emit('refreshMenu');
        event(new UserMenuPageEvent());
    }

    public function updateMenu(){
        $this->render();
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

        return view('livewire.canteen-menu', [
            'foods' => $foods,
        ]);

    }
}
