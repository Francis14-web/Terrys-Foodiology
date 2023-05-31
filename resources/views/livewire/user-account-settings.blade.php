<div class="flex relative sm:flex-row flex-col justify-between sm:w-[1000px] w-full m-4 p-8 bg-gray-200 rounded-lg">
    <p class="text-2xl text-center mb-4 font-semibold">Change Profile Picture</p>
        <div class="flex justify-center items-center h-full">
            <div class="flex flex-col justify-center items-center mb-4">
                <img class="sm:h-52 sm:w-52 rounded-full mb-4" src="/pictures/Unggoy.jpg" alt="Profile">
                <div class="flex sm:flex-row flex-col gap-4">
                    <div class="w-full flex  justify-end gap-4">
                        <button class="border rounded-lg border-green-500 h-10 w-auto px-8 font-medium">
                            Change
                        </button>
                    </div>            
                    <x-admin.button-admin title="Update"/> 
                </div>              
            </div>            
        </div>
</div>


<div class="flex sm:flex-row flex-col justify-between sm:w-[1000px] w-full m-4 p-8 bg-gray-200 rounded-lg">
    <p class="text-2xl text-center mb-4 font-semibold">Account Settings</p>
        <div class="flex sm:w-auto w-full flex-col px-4 gap-5">
            <div class="flex flex-col sm:w-96">
                <x-livewire-input-field label="Username" type="text" model="username"/>
                <x-livewire-input-field label="First name" type="text" model="firstname"/>
                <x-livewire-input-field label="Last name" type="text" model="lastname"/>
                <x-livewire-input-field label="Birthday" type="date" model="birthday"/>
                <div class="flex justify-end gap-4">
                    <x-admin.button-admin title="Update"/>
                </div>
            </div>  
        </div>
</div>

<div class="flex sm:flex-row flex-col justify-between sm:w-[1000px] w-full m-4 p-8 bg-gray-200 rounded-lg">
    <p class="text-2xl text-center mb-4 font-semibold">Change Password</p>
        <div class="flex sm:w-auto w-full flex-col px-4 gap-5">
            <div class="flex flex-col sm:w-96">
                <x-livewire-input-field label="Current Password" type="password" model="username"/>
                <x-livewire-input-field label="New Password" type="password" model="firstname"/>
                <x-livewire-input-field label="Confirm Password" type="password" model="firstname"/>
                <x-admin.button-admin title="Save"/>
            </div>
        </div>
</div>
