<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Verification;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Storage;

class UserVerificationModal extends ModalComponent
{
    public $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }


    public function approve()
    {
        try {
            $this->user->update([
                'account_verified' => true
            ]);
    
            Verification::where('user_id', $this->user->id)->delete();
            // Storage::deleteDirectory('ids/' . $this->user->id . '/');
    
            $this->closeModal();
        } catch (\Exception $e) {
            // Log or display the error message or exception
            dd('Error updating user account_verified: ' . $e->getMessage());
        }
    }

    public function reject(){
        Verification::where('user_id', $this->user->id)->delete();
        Storage::deleteDirectory('ids/' . $this->user->id . '/');

        //close modal
        $this->closeModal();
    }

    public function render()
    {
        $image = Verification::where('user_id', $this->user->id)->first();
        return view('livewire.user-verification-modal', compact('image'));
    }
    
}
