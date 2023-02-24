<?php

namespace App\Http\Livewire;

use App\Models\OrderGroup;
use Livewire\Component;

class PaymentBar extends Component
{
    public OrderGroup $order;

    public function paymentButton()
    {
        dd("Good");
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
