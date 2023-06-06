@props([
    'food' => 'food',
    'lastImagePath' => 'lastImagePath'
])

<div class="cursor-pointer bg-white flex items-center justify-evenly flex-col shadow-md rounded-3xl hover:bg-green-200" wire:click="addToOrder('{{$food->id}}')">     
    <div class="flex items-center justify-center w-full h-full relative">
        <img src="{{ asset('storage/'.$lastImagePath) }}" class=" h-64 w-full object-cover object-center rounded-t-3xl">
        @if ($food->food_stock > 0)
            <p class="absolute bottom-5 right-5 text-white bg-green-800 rounded-full text-xs px-2 py-1">Available: {{$food->food_stock}}</p>
        @else
            <p class="absolute text-white bg-red-500 rounded-full px-3 py-1 text-base">Not Available</p>
        @endif
    </div>

    <div class="flex justify-center flex-col text-center m-4 text-zinc-800 w-4/5">
        <h1 class="text-md break-words truncate">{{ $food->food_name }}</h1>
        <p class="text-xs"><span class="font-bold">Price: </span>₱ {{ $food->food_price }}</p>           
    </div>
</div>

