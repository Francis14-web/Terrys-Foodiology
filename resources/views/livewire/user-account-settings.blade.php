<div class="flex sm:flex-row sm:w-auto w-full m-4 flex-col p-4 gap-5 border border-dashed border-red-500">
    <div class="flex h-full justify-center">
        <div class="flex flex-col h-40 w-40 relative">
            <img class="h-full rounded-full" src="/pictures/Unggoy.jpg" alt="Profile">
            <div class="flex z-10 items-center justify-center absolute h-6 w-6 bottom-4 right-3 bg-amber-50 rounded-full border-green-700 border cursor-pointer">
                <i class="bx bx-edit text-green-500"></i>
            </div>
            <p class="text-center">
                Student
            </p>
        </div>
    </div>
    <div class="flex flex-col sm:w-96">
        <x-livewire-input-field label="Username" type="text" model="username"/>
        <x-livewire-input-field label="First name" type="text" model="firstname"/>
        <x-livewire-input-field label="Last name" type="text" model="lastname"/>
        <x-livewire-input-field label="Birthday" type="date" model="birthday"/>
        <div class="flex justify-end gap-4">
            <button class="border border-green-500 px-4 py-2 rounded-full">
                Cancel
            </button>
            <button class="bg-green-500 px-4 py-2 text-white font-semibold rounded-full">
                Save
            </button>
        </div>
    </div>
    
</div>
