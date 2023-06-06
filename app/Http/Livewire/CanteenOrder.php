<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;
use App\Models\OrderGroup;
use Livewire\WithPagination;
use App\Events\UserMessagingEvent;

class CanteenOrder extends Component
{
    use WithPagination;

    public $status;

    public function getListeners()
    {
        return [
            "echo:seller.". auth()->guard('canteen')->user()->id .",CanteenOrderPageEvent" => 'notifyNewOrder',
        ];
    }

    public function notifyNewOrder($payload)
    {
        $this->render();
    }

    public function statusChange($id, $value){
        $order = OrderGroup::find($id);
        $orderID = "Order #" . substr($order->id, 0, 8);
        $order->status = $value;
        $order->save();

        switch($value)
        {
            case 'Success':
                $content = 'Your ' . $orderID . ' has been completed. You can pick-up your order now.' . $order;
                break;
            case 'Failed':
                $content = 'Your ' . $orderID . ' has been rejected. Please try again.';
                break;
            case 'Serving':
                $content = 'Your ' . $orderID . ' is now being served. Please wait.';
                break;
        }

        Message::create([
            'sender_id' => auth()->guard('canteen')->user()->id,
            'sender_type' => 'App\Models\Canteen',
            'recipient_id' => $order->customer_id,
            'recipient_type' => 'App\Models\User',
            'content' => $content
        ]);

        event(new UserMessagingEvent($order->customer_id));

        $this->render();
    }

    public function render()
    {
        return view('livewire.canteen-order', [
            'orders' => OrderGroup::getAllOrdersToday()->latest('created_at')->paginate(10),
        ]);
    }
}
