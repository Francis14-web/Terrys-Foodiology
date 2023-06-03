@props([
    'food' => 'food',
    'lastImagePath' => 'lastImagePath'
])

<div class="cursor-pointer bg-white flex items-center justify-evenly flex-col shadow-md rounded-3xl hover:bg-green-200" wire:click="addToOrder('{{$food->id}}')">     
    <div class="flex items-center justify-center w-full h-full relative">
        <img src="{{ asset('storage/'.$lastImagePath) }}" class=" h-64 w-full object-cover object-center rounded-t-3xl">
        <div class="absolute bottom-5 right-5 {{ ($food->food_price != 0) ? "bg-green-500" : "bg-red-400"}} text-white w-10 h-10 flex items-center justify-center rounded-md">
            {{ $food->food_stock }}
        </div>
    </div>

    <div class="flex justify-center flex-col text-center m-4 text-zinc-800 w-4/5">
        <h1 class="text-md break-words truncate">{{ $food->food_name }}</h1>
        <p class="text-xs"><span class="font-bold">Price: </span>₱ {{ $food->food_price }}</p>           
    </div>

    
</div>

