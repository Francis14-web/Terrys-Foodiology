<div class="p-10">
    <button wire:click="$emit('openModal', 'add-food-modal')" class="fixed z-20 bottom-10 right-10 bg-green-700 w-12 h-12 flex items-center justify-center text-3xl rounded-full text-white hover:bg-green-800 hover:shadow-xl"><i class='bx bx-plus' ></i></button>
    <div class="w-full flex justify-between">
        <div class="flex gap-3 ">
            <button class="{{ ($category) == '' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}" wire:click="change('')">All</button>
            <button class="{{ ($category) == 'Rice Meal' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Rice Meal')">Rice Meal</button>
            <button class="{{ ($category) == 'Pasta' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Pasta')">Pasta</button>
            <button class="{{ ($category) == 'Snacks' ? 'text-white bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Snacks')">Snacks</button>
            <button class="{{ ($category) == 'Coffee' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Coffee')">Coffee</button>
            <button class="{{ ($category) == 'Drinks' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Drinks')">Drinks</button>
            <button class="{{ ($category) == 'Desserts' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}"wire:click="change('Desserts')">Desserts</button>
        </div>
        <div class="flex gap-5 ">
            <input type="text" wire:model="search" class=" text-sm border-transparent font-semibold bg-slate-100 rounded-3xl py-2 px-4" placeholder="Search">
        </div>
    </div>
    <div class="w-full mt-10 flex flex-col ">
        @if ($foods->count() == 0)
        <div class="self-center h-auto w-2/5 md:h-auto md:w-1/3 ">
            <img src="/img/nofood.png" class="h-full w-full object-contain">
        </div>
            <p class="text-center text-xl sm:text-3xl font-semibold">No food found</p>
        @else 
            <div class="grid gap-5 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                @foreach ($foods as $food)
                    @php
                        $imagePaths = explode(',', $food->food_image);
                        $lastImagePath = end($imagePaths);
                    @endphp
                    <x-canteen.canteen-menu-card :food="$food" :lastImagePath="$lastImagePath" />
                @endforeach
            </div>
            <div class="my-10 mx-auto flex justify-center">
                {{ $foods->links() }}
            </div>
        @endif
    </div>
</div>
