<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Admin;
use App\Models\Message;
use Livewire\Component;
use App\Events\UserMessagingEvent;
use App\Events\AdminMessagingEvent;

class AdminMessaging extends Component
{
    public $target;
    public $message = "";
    public $data;
    public $type = 'App\Models\User';

    public function getListeners()
    {
        return [
            "echo:admin-messaging-" . auth()->guard('admin')->user()->id . ",AdminMessagingEvent" => 'updateConversation',
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
            'sender_id' => auth()->guard('admin')->user()->id,
            'sender_type' => 'App\Models\Admin',
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
        $user = auth()->guard('admin')->user();

        $messages = Message::where(function ($query) use ($user) {
            $query->where([
                'sender_id' => $user->id,
                'sender_type' => 'App\Models\Admin',
                'recipient_id' => $this->target->id,
                'recipient_type' => $this->type,
            ])->orWhere(function ($query) use ($user) {
                $query->where([
                    'sender_id' => $this->target->id,
                    'sender_type' => $this->type,
                    'recipient_id' => $user->id,
                    'recipient_type' => 'App\Models\Admin',
                ]);
            });
        })
        ->orderBy('created_at', 'desc')
        ->limit(30)
        ->get()
        ->reverse();

        return view('livewire.admin-messaging', [
            'messages' => $messages,
        ]);
    }

}
