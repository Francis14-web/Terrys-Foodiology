@props([
    'food' => 'food',
    'lastImagePath' => 'lastImagePath'
])

<div class="cursor-pointer bg-white flex items-center justify-evenly flex-col shadow-md rounded-3xl hover:bg-green-200">     
    <div class="flex items-center justify-center w-full h-full">
        <img src="{{ asset('storage/'.$lastImagePath) }}" class=" h-60 lg:h-80 w-full object-cover rounded-3xl">
    </div>

    <div class="flex justify-center flex-col text-center m-4 text-zinc-800 w-4/5">
        <h1 class="text-md text-ellipsis truncate">{{$food->food_name}}</h1>
        <p class="text-xs"><span class="font-bold">Price: </span>₱ {{$food->food_price}}</p>    
        <div class="my-3 flex rounded-md justify-center">
            <button wire:click="reduceQuantity('{{$food->id}}')" type="button" class="mr-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-l-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
            -
            </button>
            <div class="relative flex items-stretch focus-within:z-10">
                <input type="text" wire:change="inputQuantity('{{$food->id}}', $event.target.value)" name="quantity" id="quantity" class="text-center focus:ring-indigo-500 focus:border-indigo-500 block w-full rounded-none pl-3 sm:text-sm border-gray-300" value="{{$food->food_stock}}">
            </div>
            <button wire:click="increaseQuantity('{{$food->id}}')" type="button" class="ml-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
            +
            </button>
        </div>
        <div class="grid grid-cols-2 place-items-center">
            <button type="button" class="edit-btn" wire:click="$emit('openModal', 'edit-food-modal', {{ json_encode([$food->id]) }})">Edit</button>
            <button type="button" class="hover:text-red-600" wire:click="delete('{{$food->id}}')">Delete</button>
        </div>       
    </div>
</div>