<?php

namespace App\Http\Livewire;

use App\Models\Food;
use App\Models\OrderGroup;
use LivewireUI\Modal\ModalComponent;

class AddUserOrder extends ModalComponent
{
    public Food $food;
    public $image;
    public $orderQuantity = 0;

    public function rules()
    {
        return [
            'orderQuantity' => 'required|numeric|min:0|max:100',
        ];
    }

    public function mount(Food $food)
    {
        $this->food = $food; 
        $imagePaths = explode(',', $food->food_image);
        $lastImagePath = end($imagePaths);
        $this->image = $lastImagePath;
    }

    public function increaseOrderQuantity()
    {
        if ($this->orderQuantity > $this->food->food_stock){
            $this->orderQuantity = $this->food->food_stock;
            return;
        } 
        $this->orderQuantity++;
    }

    public function reduceOrderQuantity()
    {
        if ($this->orderQuantity > 0) {
            $this->orderQuantity--;
        }
    }

    public function inputOrderQuantity()
    {
        if ($this->orderQuantity < 0) {
            $this->orderQuantity = 0;
        } else if ($this->orderQuantity > $this->food->food_stock) {
            $this->orderQuantity = $this->food->food_stock;
        }
    }

    public function addOrderToCart()
    {
        if ($this->orderQuantity < 0) {
            return;
        } else if ($this->orderQuantity > $this->food->food_stock) {
            return;
        }

        $check = OrderGroup::where('customer_id', auth()->guard('user')->user()->id)
                    ->where('status', 'Cart')
                    ->whereDate('created_at', now()->format('Y-m-d'))
                    ->first();

        if ($check) {
            $order = $check->orders()->where('food_id', $this->food->id)
                                    ->where('customer_id', auth()->guard('user')->user()->id)
                                    ->first();

            if ($order) {
                // Order already exists, so increment quantity and price
                $order->update([
                    'quantity' => $order->quantity + $this->orderQuantity,
                    'price' => $order->price + ($this->orderQuantity * $this->food->food_price),
                ]);

                // Update the total price of the OrderGroup
                $check->update([
                    'total_price' => $check->total_price + ($this->orderQuantity * $this->food->food_price),
                ]);
            } else {
                // Order doesn't exist, so create a new one
                $check->orders()->create([
                    'food_id' => $this->food->id,
                    'quantity' => $this->orderQuantity,
                    'price' => $this->food->food_price * $this->orderQuantity,
                    'customer_id' => auth()->guard('user')->user()->id,
                ]);

                // Update the total price of the OrderGroup
                $check->update([
                    'total_price' => $check->total_price + ($this->orderQuantity * $this->food->food_price),
                ]);
            }
        } else {
            // Create a new OrderGroup and Order 
            $orderGroup = OrderGroup::create([
                'total_price' => $this->food->food_price * $this->orderQuantity,
                'customer_id' => auth()->guard('user')->user()->id,
                'status' => 'Cart',
            ]);

            $orderGroup->orders()->create([
                'food_id' => $this->food->id,
                'quantity' => $this->orderQuantity,
                'price' => $this->food->food_price * $this->orderQuantity,
                'customer_id' => auth()->guard('user')->user()->id,
            ]);
        }
        notyf()
            ->position('x', 'right')->position('y', 'top')
            ->dismissible(true)
            ->ripple(true)
            ->addSuccess('Order added to cart!');
        return redirect()->route('user.menu');
    
    }


    public function render()
    {
        return view('livewire.add-user-order');
    }
}
