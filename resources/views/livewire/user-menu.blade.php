<div class="p-10">
    <div class="w-full flex justify-between">
        <div class="flex gap-5">
            <button class="{{ ($category) == '' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}" wire:click="change('')">All</button>
            <button class="{{ ($category) == 'Rice Meal' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Rice Meal')">Rice Meal</button>
            <button class="{{ ($category) == 'Pasta' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Pasta')">Pasta</button>
            <button class="{{ ($category) == 'Snacks' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Snacks')">Snacks</button>
            <button class="{{ ($category) == 'Coffee' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Coffee')">Coffee</button>
            <button class="{{ ($category) == 'Drinks' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Drinks')">Drinks</button>
            <button class="{{ ($category) == 'Desserts' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Desserts')">Desserts</button>
        </div>
        <div class="flex gap-5">
            <input type="text" wire:model="search" class=" text-sm border-transparent font-semibold bg-slate-100 rounded-3xl py-2 px-4" placeholder="Search">
        </div>
    </div>
    <div class="w-full mt-10">
        @if ($foods->count() == 0)
            <p class="text-center">No food found</p>
        @else 
            <div class="grid gap-5 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                @foreach ($foods as $food)
                    @php
                        $imagePaths = explode(',', $food->food_image);
                        $lastImagePath = end($imagePaths);
                    @endphp
                    <x-user.user-menu-card :food="$food" :lastImagePath="$lastImagePath"/>
                @endforeach
            </div>
            <div class="m-20 flex justify-center">
                {{ $foods->links() }}
            </div>
        @endif
    </div>
    
</div>
