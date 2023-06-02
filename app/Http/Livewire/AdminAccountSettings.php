<?php

namespace App\Http\Livewire;

use App\Models\Admin;
use Livewire\Component;
use App\Rules\AlphaSpaces;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class AdminAccountSettings extends Component
{
    use WithFileUploads;

    public Admin $acct;
    public $display_name;
    public $username;
    public $email;
    public $phone_number;
    public $profile_image;
    public $current_password;
    public $new_password;
    public $new_password_confirmation;
    public $opening_time;
    public $closing_time;

    //Variables for avatar
    public $photo;

    public function updateAvatar(){
        $this->validate([
            'photo' => 'required|image|max:2048', // 1MB Max
        ]);

        $fileExtension = $this->photo->getClientOriginalExtension();

        $this->photo->storeAs('photos/', auth()->guard('admin')->user()->id . '.' . $fileExtension);

        $this->acct->update([
            'profile_image' => 'photos/' . auth()->guard('admin')->user()->id . '.' . $fileExtension,
        ]);

        // update user avatar
        $this->profile_image = 'photos/' . auth()->guard('admin')->user()->id . '.' . $fileExtension;

        notyf()
            ->position('x', 'right')->position('y', 'top')
            ->dismissible(true)
            ->ripple(true)
            ->addSuccess('Profile image updated successfully!');

        return redirect(request()->header('Referer'));

    }

    public function updateOperatingHours(){
        // set the time to H:i:s format
        $this->opening_time = date('H:i:s', strtotime($this->opening_time));
        $this->closing_time = date('H:i:s', strtotime($this->closing_time));
        
        $this->validate([
            'opening_time' => 'required|date_format:H:i:s|before:closing_time',
            'closing_time' => 'required|date_format:H:i:s|after:opening_time',
        ]);
    
        // Update the operating hours in the database
        // $this->acct->update([
        //     'opening_time' => $this->opening_time,
        //     'closing_time' => $this->closing_time,
        // ]);

        DB::table('operation_hour')->where('id', 1)->update([
            'opening_time' => $this->opening_time,
            'closing_time' => $this->closing_time,
        ]);
    
        notyf()
            ->position('x', 'right')->position('y', 'top')
            ->dismissible(true)
            ->ripple(true)
            ->addSuccess('Operating hours updated successfully!');
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
        $this->acct = Admin::where('id', auth()->guard('admin')->user()->id)->first();
        $this->profile_image = $this->acct->profile_image;
        $this->display_name = $this->acct->display_name;
        $this->username = $this->acct->username;
        $this->email = $this->acct->email;
        $this->phone_number = $this->acct->phone_number;

        $operation_hour = DB::table('operation_hour')->first(); 
        $this->opening_time = $operation_hour->opening_time;
        $this->closing_time = $operation_hour->closing_time;
    }

    public function render()
    {
        return view('livewire.admin-account-settings');
    }
}
