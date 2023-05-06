<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\OrderGroup;
use Carbon\Carbon;
use Luigel\Paymongo\Facades\Paymongo;
use PhpParser\Node\Stmt\Switch_;

class PaymentBar extends Component
{
    public OrderGroup $order;
    public $pickup_time = 0;
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

    public function paymentButton()
    {
        $error = false;
        $time = $this->timeMap($this->pickup_time);
        
        $this->order->pickup_date = Carbon::now()->addMinutes($time)->toDateTimeString();
        $this->order->save();
        // destroy all notyf
        foreach ($this->order->orders as $userOrder) {
            if ($userOrder->food->food_stock < $userOrder->quantity) {
                notyf()
                    ->position('y', 'top')
                    ->dismissible(true)
                    ->addWarning('Not enough stock for ' . $userOrder->food->food_name);
                $error = true;
            }
        }
        if ($error)
            return;

        $gcashSource = Paymongo::source()->create([
            'type' => 'gcash',
            'amount' => $this->order->total_price,
            'currency' => 'PHP',
            'redirect' => [
                'success' => route('user.payment.success', $this->order->id),
                'failed' => route('user.payment.failed')
            ]
        ]);

        return redirect($gcashSource->redirect['checkout_url']);
    }

    
    public function mount(OrderGroup $order)
    {
        $this->order = $order;
    }

    public function render()
    {
        return view('livewire.payment-bar');
    }
}
