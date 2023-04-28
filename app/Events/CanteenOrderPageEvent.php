<?php

namespace App\Events;

use App\Models\OrderGroup;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CanteenOrderPageEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $orderGroup;
    /**
     * Create a new event instance.
     */
    public function __construct(OrderGroup $orderGroup)
    {
        $this->orderGroup = $orderGroup;
    }


    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    // public function broadcastOn(): array
    // {
    //     return [
    //         new PrivateChannel('channel-name'),
    //     ];
    // }

    public function broadcastOn()
    {
        return ['seller.' . auth()->guard('canteen')->user()->id];
    }
}
