@props([
    'food' => 'food',
    'lastImagePath' => 'lastImagePath'
])

<div class="cursor-pointer relative bg-white flex items-center justify-evenly flex-col shadow-md rounded-xl hover:shadow-none hover:bg-green-400"
    @if ($food->food_stock > 0) wire:click="openFood('{{$food->id}}')" @endif>
    <div class="relative flex items-center justify-center w-full h-full overflow-hidden">
        <img src="{{ asset('storage/'.$lastImagePath) }}" class="{{(!$food->food_stock) ? 'blur-sm' : ''}} h-60 lg:h-80 w-full object-cover rounded-t-xl">
        @if ($food->food_stock > 0)
            <p class="absolute bottom-5 right-5 text-white bg-green-800 rounded-full text-xs px-2 py-1">Available: {{$food->food_stock}}</p>
        @else
            <p class="absolute text-white bg-red-500 rounded-full px-3 py-1 text-base">Not Available</p>
        @endif
    </div>
    <div class="flex justify-center flex-col text-center m-4 text-zinc-800 w-4/5">
        <h1 class="text-md text-ellipsis truncate">{{$food->food_name}}</h1>
        <p class="text-xs"><span class="font-bold">Price: </span>₱ {{$food->food_price}}</p>
    </div>
</div>
