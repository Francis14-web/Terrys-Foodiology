<?php

namespace App\Http\Livewire;

use App\Events\UserMessagingEvent;
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

    public function getListeners()
    {
        return [
            "echo:canteen-messaging-" . auth()->guard('canteen')->user()->id . ",CanteenMessagingEvent" => 'updateConversation',
        ];
    }

    public function mount($target){
        $this->target = User::where('id', $target)->first();
    }

    public function send(){
        if ($this->message == "") {
            return;
        }

        Message::create([
            'sender_id' => auth()->guard('canteen')->user()->id,
            'sender_type' => 'App\Models\Canteen',
            'recipient_id' => $this->target->id,
            'recipient_type' => $this->type,
            'content' => $this->message,
        ]);
        $this->message = "";
        event(new UserMessagingEvent($this->target->id));
    }

    public function updateConversation(){
        $this->render();
    }

    public function render()
    {
        $user = auth()->guard('canteen')->user();

        $messages = Message::where(function ($query) use ($user) {
            $query->where([
                'sender_id' => $user->id,
                'sender_type' => 'App\Models\Canteen',
                'recipient_id' => $this->target->id,
                'recipient_type' => $this->type,
            ])->orWhere(function ($query) use ($user) {
                $query->where([
                    'sender_id' => $this->target->id,
                    'sender_type' => $this->type,
                    'recipient_id' => $user->id,
                    'recipient_type' => 'App\Models\Canteen',
                ]);
            });
        })
        ->orderBy('created_at', 'desc')
        ->limit(30)
        ->get()
        ->reverse();

        return view('livewire.canteen-messaging', [
            'messages' => $messages,
        ]);
    }

}
