<div class="p-10">
    
    <!-- navigation section -->
    <div class="sm:w-full sm:flex-row flex-col-reverse flex justify-between gap-4">
        <div class="flex gap-5 overflow-x-scroll sm:overflow-x-hidden">
            <button class="{{ ($category) == '' ? 'text-white text-sm bg-green-800 w-auto h-10 sm:px-4 px-8 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-auto h-10 sm:px-4 px-8 rounded-lg'}}" wire:click="change('')">All</button>
            <button class="{{ ($category) == 'Rice Meal' ? 'text-white text-sm bg-green-800 w-auto h-10 px-8 sm:px-4 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-auto h-10 sm:px-4 px-8 rounded-lg'}}"wire:click="change('Rice Meal')">Rice Meal</button>
            <button class="{{ ($category) == 'Pasta' ? 'text-white text-sm bg-green-800 w-auto h-10 sm:px-4 px-8 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-auto h-10 sm:px-4 px-8 rounded-lg'}}"wire:click="change('Pasta')">Pasta</button>
            <button class="{{ ($category) == 'Snacks' ? 'text-white text-sm bg-green-800 w-auto h-10 sm:px-4 px-8 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-auto h-10 sm:px-4 px-8 rounded-lg'}}"wire:click="change('Snacks')">Snacks</button>
            <button class="{{ ($category) == 'Coffee' ? 'text-white text-sm bg-green-800 w-auto h-10 sm:px-4 px-8 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-auto h-10 sm:px-4 px-8 rounded-lg'}}"wire:click="change('Coffee')">Coffee</button>
            <button class="{{ ($category) == 'Drinks' ? 'text-white text-sm bg-green-800 w-auto h-10 sm:px-4 px-8 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-auto h-10 sm:px-4 px-8 rounded-lg'}}"wire:click="change('Drinks')">Drinks</button>
            <button class="{{ ($category) == 'Desserts' ? 'text-white text-sm bg-green-800 w-auto h-10 sm:px-4 px-8 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-auto h-10 sm:px-4 px-8 rounded-lg'}}"wire:click="change('Desserts')">Desserts</button>
        </div>
        <div class="">
            <input type="text" wire:model="search" class="text-sm border-transparent font-semibold bg-slate-100 rounded-3xl py-2 px-4 " placeholder="Search">
        </div>
    </div>


    
        <div class="w-full h-screen mt-10 flex flex-col">
            @if ($foods->count() == 0)
            <div class="self-center h-auto w-2/5 md:h-auto md:w-1/3 ">
                <img src="/img/nofood.png" class="h-full w-full object-contain">
            </div>
                <p class="text-center text-xl sm:text-3xl font-semibold">No food found</p>
            @else 
                <div class="grid place-self-center gap-4 sm:gap-8 grid-cols-2  w-full  sm:grid-cols-5">
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


