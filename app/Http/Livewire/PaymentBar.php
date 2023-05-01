<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\OrderGroup;
use Luigel\Paymongo\Facades\Paymongo;

class PaymentBar extends Component
{
    public OrderGroup $order;

    public function paymentButton()
    {
        $error = false;
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
