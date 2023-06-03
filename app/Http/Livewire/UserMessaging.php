<?php

namespace App\Http\Livewire;

use App\Models\Message;
use App\Models\Canteen;
use App\Models\Admin;
use Livewire\Component;

class UserMessaging extends Component
{
    public $target;
    public $message = "";
    public $data;
    public $type = 'App\Models\Canteen';

    public function mount($target){
        $this->target = Canteen::where('id', $target)->first();
        if ($this->target == null) {
            $this->target = Admin::where('id', $target)->first();
            $this->type = 'App\Models\Admin';
        }
    }

    public function send(){
        if ($this->message == "") {
            return;
        }

        Message::create([
            'sender_id' => auth()->guard('user')->user()->id,
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
            'sender_id' => auth()->guard('user')->user()->id,
            'sender_type' => 'App\Models\User',
            'recipient_id' => $this->target->id,
            'recipient_type' => $this->type,
        ])
        ->orWhere([
            'sender_id' => $this->target->id,
            'sender_type' => $this->type,
            'recipient_id' => auth()->guard('user')->user()->id,
            'recipient_type' => 'App\Models\User',
        ])
        ->limit(10)->get();

        return view('livewire.user-messaging', [
            'messages' => $messages,
        ]);
    }

}
