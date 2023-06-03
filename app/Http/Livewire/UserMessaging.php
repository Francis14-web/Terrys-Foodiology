<?php

namespace App\Http\Livewire;

use App\Models\Admin;
use App\Models\Canteen;
use App\Models\Message;
use Livewire\Component;
use App\Events\AdminMessagingEvent;
use App\Events\CanteenMessagingEvent;

class UserMessaging extends Component
{
    public $target;
    public $message = "";
    public $data;
    public $type = 'App\Models\Canteen';

    public function getListeners()
    {
        return [
            "echo:user-messaging-" . auth()->guard('user')->user()->id . ",UserMessagingEvent" => 'updateConversation',
        ];
    }

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

        if ($this->type == 'App\Models\Admin') {
            event(new AdminMessagingEvent($this->target->id));
            return;
        }
        event(new CanteenMessagingEvent($this->target->id));
    }

    public function updateConversation(){
        $this->render();
    }

    public function render()
    {
        $user = auth()->guard('user')->user();

        $messages = Message::where(function ($query) use ($user) {
            $query->where([
                'sender_id' => $user->id,
                'sender_type' => 'App\Models\User',
                'recipient_id' => $this->target->id,
                'recipient_type' => $this->type,
            ])->orWhere(function ($query) use ($user) {
                $query->where([
                    'sender_id' => $this->target->id,
                    'sender_type' => $this->type,
                    'recipient_id' => $user->id,
                    'recipient_type' => 'App\Models\User',
                ]);
            });
        })
        ->orderBy('created_at', 'desc')
        ->limit(30)
        ->get()
        ->reverse();

        return view('livewire.user-messaging', [
            'messages' => $messages,
        ]);
    }


}
