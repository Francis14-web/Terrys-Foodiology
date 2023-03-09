<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserAccountSettings extends Component
{
    public $firstname;
    public $lastname;
    public $username;
    public $profile_picture;

    public function mount()
    {
        $this->firstname = auth()->guard('user')->user()->firstname;
        $this->lastname = auth()->guard('user')->user()->lastname;
        $this->username = auth()->guard('user')->user()->username;
        $this->profile_picture = auth()->guard('user')->user()->profile_picture;
    }

    public function render()
    {
        return view('livewire.user-account-settings');
    }
}
