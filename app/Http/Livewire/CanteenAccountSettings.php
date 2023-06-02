<?php

namespace App\Http\Livewire;

use App\Models\Canteen;
use Livewire\Component;
use App\Rules\AlphaSpaces;
use Livewire\WithFileUploads;

class CanteenAccountSettings extends Component
{
    use WithFileUploads;

    public Canteen $acct;
    public $display_name;
    public $username;
    public $email;
    public $phone_number;
    public $profile_image;
    public $current_password;
    public $new_password;
    public $new_password_confirmation;

    //Variables for avatar
    public $photo;

    public function updateAvatar(){
        $this->validate([
            'photo' => 'required|image|max:2048', // 1MB Max
        ]);

        $fileExtension = $this->photo->getClientOriginalExtension();

        $this->photo->storeAs('photos/', auth()->guard('canteen')->user()->id . '.' . $fileExtension);

        $this->acct->update([
            'profile_image' => 'photos/' . auth()->guard('canteen')->user()->id . '.' . $fileExtension,
        ]);

        // update user avatar
        $this->profile_image = 'photos/' . auth()->guard('canteen')->user()->id . '.' . $fileExtension;

        notyf()
            ->position('x', 'right')->position('y', 'top')
            ->dismissible(true)
            ->ripple(true)
            ->addSuccess('Profile image updated successfully!');

        return redirect(request()->header('Referer'));

    }

    public function updateAccount(){
        $this->validate([
            'display_name' => ['required', 'min:2', 'max:40', new AlphaSpaces],
            'username' => 'required|unique:users,username,'.$this->acct->id,
            'email' => 'required|unique:users,email,'.$this->acct->id,
            'phone_number' => 'required|numeric|digits:11',
        ]);

        $this->acct->update([
            'display_name' => $this->display_name,
            'username' => $this->username,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
        ]);

        notyf()
            ->position('x', 'right')->position('y', 'top')
            ->dismissible(true)
            ->ripple(true)
            ->addSuccess('Account updated successfully!');
    }

    public function updatePassword(){
        $this->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if(!password_verify($this->current_password, $this->acct->password)){
            notyf()
                ->position('x', 'right')->position('y', 'top')
                ->dismissible(true)
                ->ripple(true)
                ->addError('Current password is incorrect!');
        }else{
            $this->acct->update([
                'password' => bcrypt($this->new_password),
            ]);

            notyf()
                ->position('x', 'right')->position('y', 'top')
                ->dismissible(true)
                ->ripple(true)
                ->addSuccess('Password updated successfully!');
        }

        $this->current_password = '';
        $this->new_password = '';
        $this->new_password_confirmation = '';
    }

    public function mount()
    {
        $this->acct = Canteen::where('id', auth()->guard('canteen')->user()->id)->first();
        $this->profile_image = $this->acct->profile_image;
        $this->display_name = $this->acct->display_name;
        $this->username = $this->acct->username;
        $this->email = $this->acct->email;
        $this->phone_number = $this->acct->phone_number;
    }

    public function render()
    {
        return view('livewire.canteen-account-settings');
    }
}
