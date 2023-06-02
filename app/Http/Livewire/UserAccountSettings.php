<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Rules\AlphaSpaces;
use Livewire\WithFileUploads;

class UserAccountSettings extends Component
{
    use WithFileUploads;

    public User $acct;
    public $firstname;
    public $lastname;
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

        $this->photo->storeAs('photos/', auth()->guard('user')->user()->id . '.' . $fileExtension);

        $this->acct->update([
            'profile_image' => 'photos/' . auth()->guard('user')->user()->id . '.' . $fileExtension,
        ]);

        // update user avatar
        $this->profile_image = 'photos/' . auth()->guard('user')->user()->id . '.' . $fileExtension;

        notyf()
            ->position('x', 'right')->position('y', 'top')
            ->dismissible(true)
            ->ripple(true)
            ->addSuccess('Profile image updated successfully!');

        return redirect(request()->header('Referer'));

    }

    public function updateAccount(){
        $this->validate([
            'firstname' => ['required', 'min:2', 'max:20', new AlphaSpaces],
            'lastname' => ['required', 'min:2', 'max:20', new AlphaSpaces],
            'username' => 'required|unique:users,username,'.$this->acct->id,
            'email' => 'required|unique:users,email,'.$this->acct->id,
            'phone_number' => 'required|numeric|digits:11',
        ]);

        $this->acct->update([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
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
        $this->acct = User::where('id', auth()->guard('user')->user()->id)->first();
        $this->profile_image = $this->acct->profile_image;
        $this->firstname = $this->acct->firstname;
        $this->lastname = $this->acct->lastname;
        $this->username = $this->acct->username;
        $this->email = $this->acct->email;
        $this->phone_number = $this->acct->phone_number;
    }

    public function render()
    {
        return view('livewire.user-account-settings');
    }
}
