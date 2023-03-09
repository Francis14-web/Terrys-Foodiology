<div class="flex items-center gap-10 w-full max-w-xl">
    <div class="flex justify-center relative  bg-red-900 h-[200px] w-[200px] rounded-full">
        <img class="bg-white object-cover h-full w-full rounded-full content-center" src="unggoy.jpg" alt="Profile">
        <div class="absolute top-0 h-full w-full bg-white opacity-0 transition-all duration-150 ease-in-out cursor-pointer">
            <i class="bx bx-edit"></i>
        </div>
    </div>
    <div class="flex flex-col max-w-xl w-full">
        <x-livewire-input-field label="Username" type="text" model="username"/>
        <x-livewire-input-field label="First name" type="text" model="firstname"/>
        <x-livewire-input-field label="Last name" type="text" model="lastname"/>
    </div>
</div>
