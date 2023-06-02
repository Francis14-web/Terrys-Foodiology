<?php

namespace App\Http\Livewire;

use App\Models\Message;
use App\Models\User;
use App\Models\Admin;
use Livewire\Component;

class CanteenMessaging extends Component
{
    public $target;
    public $message = "";
    public $data;
    public $type = 'App\Models\User';

    public function mount($target){
        $this->target = User::where('id', $target)->first();
    }

    public function send(){
        if ($this->message == "") {
            return;
        }

        Message::create([
            'sender_id' => auth()->guard('canteen')->user()->id,
            'sender_type' => 'App\Models\User',
            'recipient_id' => $this->target->id,
            'recipient_type' => $this->type,
            'content' => $this->message,
        ]);
        $this->message = "";
        $this->emit('messageSent');
    }

    public function render()
    {
        $messages = Message::where([
            'sender_id' => auth()->guard('canteen')->user()->id,
            'sender_type' => 'App\Models\Canteen',
            'recipient_id' => $this->target->id,
            'recipient_type' => $this->type,
        ])->orWhere([
            'sender_id' => $this->target->id,
            'sender_type' => 'App\Models\User',
            'recipient_id' => auth()->guard('canteen')->user()->id,
            'recipient_type' => $this->type,
        ])
        ->limit(10)->get();

        return view('livewire.canteen-messaging', [
            'messages' => $messages,
        ]);
    }
}
