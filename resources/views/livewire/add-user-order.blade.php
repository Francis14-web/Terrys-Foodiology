<div>
    <h1 class="mb-2 font-bold text-lg">Order Details</h1>
    <div class="flex items-center justify-between">
        <h1 class="mb-2 text-md">{{$food->food_name}}</h1>
        <div class="my-3 flex rounded-md justify-center">
            <button wire:click="reduceOrderQuantity('{{$food->id}}')" type="button" class="mr-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-full text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-green-500 focus:border-green-500">
                -
            </button>
            <div class="relative flex items-stretch focus-within:z-10">
                <input type="text" wire:model="orderQuantity" wire:change="inputOrderQuantity('{{$food->id}}', $event.target.value)" name="quantity" id="quantity" class="text-center focus:ring-green-500 focus:border-green-500 block w-20 rounded-none pl-3 sm:text-sm border-gray-300" value="{{$orderQuantity}}">
            </div>
            <button wire:click="increaseOrderQuantity('{{$food->id}}')" type="button" class="ml-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-full text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-green-500 focus:border-green-500">
                +
            </button>
        </div>
    </div>
    <div class="w-full flex justify-between">
        <p class="text-black/50 font-bold text-sm">Total</p>
        <p>
            <span class="font-bold text-sm">₱</span>
            <span class="font-bold text-lg">
                {{
                    is_numeric($food->food_price)
                    ? (is_numeric($orderQuantity) ? floatval($food->food_price) * $orderQuantity : "0")
                    : "0"
                }}
            </span>
            
        </p>
    </div>
    
    <div class="flex gap-5 mt-10">
        <button wire:click="$emit('closeModal')" class="grow hover:bg-gray-200 rounded-md py-2 text-xs">Cancel</button>
        <button wire:click="addOrderToCart" class="grow bg-green-500 rounded-md py-2 text-xs text-white hover:bg-green-800">Add to Cart</button>
    </div>
</div>
