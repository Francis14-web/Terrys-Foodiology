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
