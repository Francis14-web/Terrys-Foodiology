<div class="md:px-4 md:p-10">
    <div class="sticky top-10 z-20 bg-white md:bg-transparent p-3  lg:flex justify-between">
        <div class=" flex justify-center mb-5 lg:hidden">
            <input type="text" wire:model="search" class=" text-sm border-transparent font-semibold bg-slate-100  rounded-3xl py-2 px-4" placeholder="Search">
        </div>
        <div class=" overflow-x-scroll no-scrollbar touch-none max-w-[1394px] lg:w-full flex justify-between 2xl:overflow-x-hidden">
            <div class="flex gap-5 md:gap-3 ">
                <button class="{{ ($category) == '' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}" wire:click="change('')">All</button>
                <button class="{{ ($category) == 'Rice Meal' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Rice Meal')">Rice Meal</button>
                <button class="{{ ($category) == 'Pasta' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Pasta')">Pasta</button>
                <button class="{{ ($category) == 'Snacks' ? 'text-white bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Snacks')">Snacks</button>
                <button class="{{ ($category) == 'Coffee' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Coffee')">Coffee</button>
                <button class="{{ ($category) == 'Drinks' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Drinks')">Drinks</button>
                <button class="{{ ($category) == 'Desserts' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Desserts')">Desserts</button>
            </div>
        </div>
        <div class="hidden lg:flex gap-5 px-2 ">
            <input type="text" wire:model="search" class=" text-sm border-transparent font-semibold bg-slate-100 rounded-3xl py-2 px-4" placeholder="Search">
        </div>
    </div>
    <div class="w-full mt-10 flex flex-col">
        @if ($foods->count() == 0)
            <p class="text-center">No food found</p>
        @else 
            <div class="grid place-self-center gap-1 md:gap-4 grid-cols-2 md:grid-cols-3 max-w-[1019px] lg:grid-cols-4 xl:grid-cols-5">
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
