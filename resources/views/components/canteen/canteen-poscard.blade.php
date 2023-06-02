@props([
    'food' => 'food',
    'lastImagePath' => 'lastImagePath'
])

<div class="cursor-pointer bg-white flex items-center justify-evenly flex-col shadow-md rounded-3xl hover:bg-green-200" wire:click="addToOrder('{{$food->id}}')">     
    <div class="flex items-center justify-center w-full h-full">
        <img src="{{ asset('storage/'.$lastImagePath) }}" class=" h-64 w-full object-cover object-center rounded-t-3xl">
    </div>

    <div class="flex justify-center flex-col text-center m-4 text-zinc-800 w-4/5">
        <h1 class="text-md break-words truncate">{{ $food->food_name }}</h1>
        <p class="text-xs"><span class="font-bold">Price: </span>₱ {{ $food->food_price }}</p>           
    </div>
</div>

