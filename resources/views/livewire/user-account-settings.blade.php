<div>
    <div class="flex relative sm:flex-row flex-col justify-between sm:w-[1000px] w-full m-4 mx-auto p-8 bg-white shadow rounded-lg">
        <div>
            <p class="text-2xl text-black/75 text-left mb-4">Change Profile Picture</p>
            <p class="text-black/60">Change your account profile picture</p>
        </div>
        <div class="flex justify-center items-center h-full">
            <div class="flex flex-col justify-center items-center mb-4">
                <form wire:submit.prevent="updateAvatar">
                    <img class="sm:h-52 sm:w-52 rounded-full mb-4" src="{{ asset('storage/' . $profile_image) }}" alt="Profile">
                    <div>
                        <input class="p-2 rounded border text-xs border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400" type="file" wire:model="photo">
                    </div>
                    @error('photo') <span class="error">{{ $message }}</span> @enderror
                    <div class="flex justify-end gap-4 mt-5">
                        <button class="text-white rounded-lg bg-green-500 h-10 w-auto px-8 font-medium" type="submit">Save Photo</button>
                    </div>
                </form>
                {{-- <div class="flex sm:flex-row flex-col gap-4">
                    <div class="w-full flex  justify-end gap-4">
                        <button class="border rounded-lg border-green-500 h-10 w-auto px-8 font-medium">
                            Change
                        </button>
                    </div>            
                    <x-admin.button-admin title="Update"/> 
                </div>               --}}
            </div>            
        </div>
    </div>
    
    
    <div class="flex sm:flex-row flex-col justify-between sm:w-[1000px] w-full m-4 mx-auto p-8 bg-white shadow rounded-lg">
        <div>
            <p class="text-2xl text-black/75 text-left mb-4">Account Settings</p>
            <p class="text-black/60">Change your account information</p>
        </div>
        <div class="flex sm:w-auto w-full flex-col px-4 gap-5">
            <div class="flex flex-col sm:w-96">
                <x-livewire-input-field value="{{ $username }}" label="Username" type="text" model="username"/>
                <x-livewire-input-field value="{{ $firstname }}" label="First name" type="text" model="firstname"/>
                <x-livewire-input-field value="{{ $lastname }}" label="Last name" type="text" model="lastname"/>
                <x-livewire-input-field value="{{ $email }}" label="Email" type="email" model="email"/>
                <x-livewire-input-field value="{{ $phone_number }}" label="Phone Number" type="text" model="phone_number"/>
                {{-- <x-livewire-input-field value="birthday" label="Birthday" type="date" model="birthday"/> --}}
                <div class="flex justify-end gap-4">
                    <div class="w-full flex justify-end gap-4" >
                        <button class="text-white rounded-lg bg-green-500 h-10 w-auto px-8 font-medium" wire:click="updateAccount">
                            Update account
                        </button>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    
    <div class="flex sm:flex-row flex-col justify-between sm:w-[1000px] w-full m-4 mx-auto p-8 bg-white shadow rounded-lg">
        <div>
            <p class="text-2xl text-black/75 text-left mb-4">Password</p>
            <p class="text-black/60">Change account password</p>
        </div>
        <div class="flex sm:w-auto w-full flex-col px-4 gap-5">
            <div class="flex flex-col sm:w-96">
                <x-livewire-input-field label="Current Password" type="password" model="current_password"/>
                <x-livewire-input-field label="New Password" type="password" model="new_password"/>
                <x-livewire-input-field label="Confirm Password" type="password" model="new_password_confirmation"/>
                <div class="flex justify-end gap-4">
                    <div class="w-full flex justify-end gap-4" >
                        <button class="text-white rounded-lg bg-green-500 h-10 w-auto px-8 font-medium" wire:click="updatePassword">
                            Change Password
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

