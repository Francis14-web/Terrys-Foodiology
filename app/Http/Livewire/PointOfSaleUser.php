<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Food;
use App\Models\User;
use App\Models\Order;
use Livewire\Component;
use App\Models\OrderGroup;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Luigel\Paymongo\Facades\Paymongo;

class PointOfSaleUser extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public $category = 'Rice Meal';
    public $search = "";
    public $total = 0;
    public $subtotal = 0;
    public $discount;
    public $orderQuantity = 1;
    public $pickup_time = 0;

    public User $user;

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

    public function updatedSearch()
    {
        $this->resetPage();
    }
    
    public function setCategory($category)
    {
        $this->category = $category;
    }

    public $order_time = [
        'Immediately',
        '15 minutes from now',
        '30 minutes from now',
        '1 hour from now',
        '2 hours from now',
        '3 hours from now',
        '4 hours from now',
    ];

    public function timeMap($time){
        switch($time){
            case 0:
                return 5;
            case 1:
                return 15;
            case 2:
                return 30;
            case 3:
                return 60;
            case 4:
                return 120;
            case 5:
                return 180;
            case 6:
                return 240;
        }
    }

    public function mount(){
        $this->user = User::where('id', auth()->guard('user')->user()->id)->first();
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
        if ($food->food_stock <= 0){
            return;
        }
        
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

    public function paymentButton()
    {
        $error = false;
        $time = $this->timeMap($this->pickup_time);

        // Retrieve the user's order group
        $userOrder = OrderGroup::where('customer_id', $this->user->id)
            ->where('status', 'Cart')
            ->whereDate('created_at', now()->format('Y-m-d'))
            ->first();

        if (!$userOrder) {
            // Handle the case when the user's order group is not found
            // You can display an error message or redirect to an error page
            return;
        }

        // Calculate the pickup time
        $pickupTime = Carbon::now()->addMinutes($time);

        // Retrieve the closing time from the operation_hours table
        $closingTime = DB::table('operation_hour')->first()->closing_time;

        // Check if the pickup time is greater than the closing time
        if ($pickupTime->greaterThan($closingTime)) {
            // Handle the case when the pickup time is greater than the closing time
            // You can display an error message or return none
            notyf()
                ->position('y', 'top')
                ->dismissible(true)
                ->addWarning('Our store will be closed by ' . Carbon::parse($closingTime)->format('g:i A'));
            return;
        }

        // Save the pickup date
        $userOrder->pickup_date = $pickupTime->toDateTimeString();
        $userOrder->save();

        // Check for stock availability
        foreach ($userOrder->orders as $order) {
            if ($order->food->food_stock < $order->quantity) {
                notyf()
                    ->position('y', 'top')
                    ->dismissible(true)
                    ->addWarning('Not enough stock for ' . $order->food->food_name);
                $error = true;
            }
        }

        if ($error) {
            return;
        }

        // Create Paymongo source
        $gcashSource = Paymongo::source()->create([
            'type' => 'gcash',
            'amount' => $userOrder->total_price,
            'currency' => 'PHP',
            'redirect' => [
                'success' => route('user.payment.success', $userOrder->id),
                'failed' => route('user.payment.failed')
            ]
        ]);

        return redirect($gcashSource->redirect['checkout_url']);
    }


    public function render()
    {
        $query = Food::where('owner_id', '99626032-c82b-4755-a9a5-228103ce5c3e');

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

        return view('livewire.point-of-sale-user', [
            'foods' => $foods,
            'userOrder' => $userOrder,
        ]);
    }
}
