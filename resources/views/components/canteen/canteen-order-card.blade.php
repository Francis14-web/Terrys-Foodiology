@props([
    'order' => 'order'
])

<div class="flex py-2">
    <img src="{{ asset('storage/'. $order->food->food_image) }}" class=" h-20 lg:h-30 w-20 object-cover rounded-md">
    <div class="w-full px-2 flex flex-col items-between gap-3">
        <div class="text-sm ">
            <p>{{ $order->food->food_name }}</p>

        </div>
        <div class="flex justify-between items-center">
            <div class="flex">
                <button wire:click="decreaseQuantity('{{$order->id}}')" type="button" class="mr-1 inline-flex items-center space-x-2 h-5 w-5 justify-center  border border-gray-300 text-sm font-medium text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                -
                </button>
                <div class="relative flex focus-within:z-10">
                    <p class="text-center w-5 h-5 focus:ring-indigo-500 focus:border-indigo-500  rounded-none  sm:text-sm border-gray-300">{{ $order->quantity }}</p>
                    {{-- <input type="number"  name="quantity" id="quantity"  value=""> --}}
                </div>
                <button wire:click="increaseQuantity('{{$order->id}}')" type="button" class="ml-1 relative inline-flex items-center space-x-2 h-5 w-5 justify-center border border-gray-300 text-sm font-medium  text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                +
                </button>
            </div>
            <p class="text-green-500">₱ {{$order->food->food_price}}</p>
        </div>
    </div>
</div>