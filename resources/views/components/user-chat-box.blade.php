@props([
    'target' => 'target', 
    'data' => 'data'  
])

<div class="sm:flex hidden h-[800px] flex-col rounded-lg ">
    <div class="flex h-sm w-[40vw] align-center rounded-t-lg  bg-green-500 bg-opacity-25 py-2 px-4 drop-shadow-2x">
        <div class="pr-2 max-w-[60px]">
            <img class="object-cover  rounded-full" src="{{$data->profile_image}}">
        </div>
        <div class="flex flex-col justify-center">
            <h1 class="text-md font-medium">{{$data->username}}</h1>                                        
            {{-- <p class="text-xs">Active</p> --}}
        </div>
    </div>
    <hr class="border-green-600">
    @livewire('user-messaging', ['target' => $target])
</div