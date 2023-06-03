<?php

namespace App\Http\Livewire;

use App\Models\Food;
use App\Models\User;
use App\Models\Order;
use Livewire\Component;
use App\Models\OrderGroup;
use Livewire\WithPagination;

class PointOfSale extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public $category = 'Rice Meal';
    public $search = "";
    public $total = 0;
    public $subtotal = 0;
    public $discount;
    public $orderQuantity = 1;

    public User $user;

    protected $listeners = [
        'transactionCompleted' => 'render'
    ];

    public function updatedSearch()
    {
        $this->resetPage();
    }
    
    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function mount(){
        $this->user = User::where('email', 'walkInOrder@terrys.live')->first();
    }

    public function decreaseQuantity(Order $order)
    {
        if ($order->quantity > 1) {
            $order->update([
                'quantity' => $order->quantity - 1,
                'price' => $order->price - $order->food->food_price,
            ]);

            $order->orderGroup->update([
                'total_price' => $order->orderGroup->total_price - $order->food->food_price,
            ]);
        } else {
            $order->orderGroup->update([
                'total_price' => $order->orderGroup->total_price - $order->food->food_price,
            ]);
            
            $order->delete();
            
            $userOrder = OrderGroup::where('customer_id', $this->user->id)
                ->where('status', 'Cart')
                ->whereDate('created_at', now()->format('Y-m-d'))
                ->first();

            if ($userOrder->orders->count() == 0) {
                $userOrder->delete();
            }
        }
    }

    public function increaseQuantity(Order $order)
    {

        if ($order->quantity >= $order->food->food_stock){
            return;
        }

        $order->update([
            'quantity' => $order->quantity + 1,
            'price' => $order->price + $order->food->food_price,
        ]);

        $order->orderGroup->update([
            'total_price' => $order->orderGroup->total_price + $order->food->food_price,
        ]);
    }



    public function addToOrder(Food $food){

        
        $check = OrderGroup::where('customer_id', $this->user->id)
            ->where('status', 'Cart')
            ->whereDate('created_at', now()->format('Y-m-d'))
            ->first();

        if ($check) {
            $order = $check->orders()->where('food_id', $food->id)
                                ->where('customer_id', $this->user->id)
                                ->first();
            if ($order) {
                // Order already exists, so increment quantity and price
                if ($order->quantity >= $order->food->food_stock){
                    return;
                }
                $order->update([
                    'quantity' => $order->quantity + $this->orderQuantity,
                    'price' => $order->price + ($this->orderQuantity * $food->food_price),
                ]);

                // Update the total price of the OrderGroup
                $check->update([
                    'total_price' => $check->total_price + ($this->orderQuantity * $food->food_price),
                ]);
            } else {
                // Order doesn't exist, so create a new one
                $check->orders()->create([
                    'food_id' => $food->id,
                    'quantity' => 1,
                    'price' => $food->food_price,
                    'customer_id' => $this->user->id,
                ]);

                // Update the total price of the OrderGroup
                $check->update([
                    'total_price' => $check->total_price + ($this->orderQuantity * $food->food_price),
                ]);
            }
        } else {
            // Create a new OrderGroup and Order 
            $orderGroup = OrderGroup::create([
                'total_price' => $food->food_price,
                'customer_id' => $this->user->id,
                'status' => 'Cart',
            ]);

            $orderGroup->orders()->create([
                'food_id' => $food->id,
                'quantity' => 1,
                'price' => $food->food_price,
                'customer_id' => $this->user->id,
            ]);
        }

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

        $userOrder = OrderGroup::where('customer_id', $this->user->id)
            ->where('status', 'Cart')
            ->whereDate('created_at', now()->format('Y-m-d'))
            ->first();

        return view('livewire.point-of-sale', [
            'foods' => $foods,
            'userOrder' => $userOrder,
        ]);
    }
}
