<div class="p-10">
    <button wire:click="$emit('openModal', 'add-food-modal')" class="fixed bottom-10 right-10 bg-green-700 w-12 h-12 flex items-center justify-center text-3xl rounded-full text-white hover:bg-green-800 hover:shadow-xl"><i class='bx bx-plus' ></i></button>
    <div class="w-full flex justify-between">
        <div class="flex gap-5">
            <button class="{{ ($category) == '' ? 'text-white bg-green-800 py-1 px-3 rounded-full' : 'text-green-800 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white px-2 py-2 rounded-full'}}" wire:click="change('')">All</button>
            <button class="{{ ($category) == 'Rice Meal' ? 'text-white bg-green-800 py-1 px-3 rounded-full' : 'text-green-800 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white px-2 py-2 rounded-full'}}"wire:click="change('Rice Meal')">Rice Meal</button>
            <button class="{{ ($category) == 'Pasta' ? 'text-white bg-green-800 py-1 px-3 rounded-full' : 'text-green-800 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white px-2 py-2 rounded-full'}}"wire:click="change('Pasta')">Pasta</button>
            <button class="{{ ($category) == 'Snacks' ? 'text-white bg-green-800 py-1 px-3 rounded-full' : 'text-green-800 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white px-2 py-2 rounded-full'}}"wire:click="change('Snacks')">Snacks</button>
            <button class="{{ ($category) == 'Coffee' ? 'text-white bg-green-800 py-1 px-3 rounded-full' : 'text-green-800 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white px-2 py-2 rounded-full'}}"wire:click="change('Coffee')">Coffee</button>
            <button class="{{ ($category) == 'Drinks' ? 'text-white bg-green-800 py-1 px-3 rounded-full' : 'text-green-800 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white px-2 py-2 rounded-full'}}"wire:click="change('Drinks')">Drinks</button>
            <button class="{{ ($category) == 'Desserts' ? 'text-white bg-green-800 py-1 px-3 rounded-full' : 'text-green-800 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white px-2 py-2 rounded-full'}}"wire:click="change('Desserts')">Desserts</button>
        </div>
        <div class="flex gap-5">
            <input type="text" wire:model="search" class="w-4/5 border-transparent bg-lime-50 rounded-3xl py-2 px-4" placeholder="Search">
        </div>
    </div>
    <div class="w-full mt-10">
        @if ($foods->count() == 0)
            <p class="text-center">No food found</p>
        @else 
            <div class="grid gap-5 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($foods as $food)
                    @php
                        $imagePaths = explode(',', $food->food_image);
                        $lastImagePath = end($imagePaths);
                    @endphp
                    <div class="cursor-pointer bg-white flex items-center justify-evenly flex-col shadow-md rounded-3xl hover:scale-110 hover:shadow-none hover:bg-green-400">     
                        <div class="flex items-center justify-center w-full h-full">
                            <img src="{{ asset('storage/'.$lastImagePath) }}" class=" h-60 lg:h-80 w-full object-cover rounded-3xl">
                        </div>
                    
                        <div class="flex justify-center flex-col text-center m-4 text-zinc-800 w-4/5">
                            <h1 class="text-md break-words">{{$food->food_name}}</h1>
                                <p class="text-xs"><span class="font-bold">Price: </span>₱ {{$food->food_price}}</p>
                                    <div class="grid grid-cols-2 place-items-center">
                                        <button type="button" class="edit-btn" wire:click="$emit('openModal', 'edit-food-modal', {{ json_encode([$food->id]) }})">Edit</button>
                                        <button type="button" class="hover:text-red-600" wire:click="delete('{{$food->id}}')">Delete</button>
                                    </div>       
                        </div>

                        
                    </div>

                    
                @endforeach
            </div>
            {{ $foods->links() }}
        @endif
    </div>
    
</div>
