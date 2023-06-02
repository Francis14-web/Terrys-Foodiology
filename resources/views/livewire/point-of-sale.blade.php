<div class="flex h-screen justify-between">
    <div class="ml-[270px] flex-1 grow" id="main-window">
        <x-heading title="Sales" />
        <div class="mx-auto flex w-full justify-center px-5 pb-8 scrollbar-thumb-red-400">
            <div class="w-full flex flex-col p-5">
                <!-- category title -->                      
                <div class="mb-5 flex items-center justify-between">
                    <div class="flex gap-3">
                        <button wire:click="setCategory('Rice Meal')" class="{{ ($category) == 'Rice Meal' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}">
                            Rice Meal
                        </button>
                        <button wire:click="setCategory('Pasta')" class="{{ ($category) == 'Pasta' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}">
                            Pasta
                        </button>
                        <button wire:click="setCategory('Snacks')" class="{{ ($category) == 'Snacks' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}">
                            Snacks
                        </button>
                        <button wire:click="setCategory('Coffee')" class="{{ ($category) == 'Coffee' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}">
                            Coffee
                        </button>
                        <button wire:click="setCategory('Drinks')" class="{{ ($category) == 'Drinks' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}">
                            Drinks
                        </button>
                        <button wire:click="setCategory('Desserts')" class="{{ ($category) == 'Desserts' ? 'text-white text-sm bg-green-800 w-24 h-10 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-24 h-10 rounded-lg'}}">
                            Desserts
                        </button>        
                    </div>
                    <div class="flex">
                        <input type="text" wire:model="search" class=" text-sm border-transparent font-semibold bg-slate-100 rounded-3xl py-2 px-4" placeholder="Search">
                    </div>
                </div>        
                <!---card -->
                <div class="grid gap-5 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 mt-4">
                    @foreach ($foods as $food)
                        @php
                            $imagePaths = explode(',', $food->food_image);
                            $lastImagePath = end($imagePaths);
                        @endphp
                        <x-canteen.canteen-poscard :food="$food" :lastImagePath="$lastImagePath"/>
                    @endforeach
                </div>
                <div class="mt-10 w-full flex justify-end">
                    {{ $foods->links() }}
                </div>
            </div>
        </div>
    </div>
    @if($userOrder)
        <div class="bg-white max-w-xs w-full max-h-screen border-l relative p-5 flex flex-col">
            <div class=" flex-1">
                <p class="font-semibold text-base mt-4 mb-2">Orders Details</p>
                <!-- Border -->
                <div class="relative flex pb-5 items-center">
                    <div class="flex-grow border-t  border-gray-400"></div>
                </div>  
                <!-- Order Section -->
                <div class="overflow-y-auto max-h-[65vh] scrollbar">
                    @foreach ($userOrder->orders as $order)
                        <x-canteen.canteen-order-card :order="$order"/>
                    @endforeach
                </div>
            </div>
            <div>
                <!-- Border -->
                <div class="relative flex py-5 items-center">
                    <div class="flex-grow border-t border-dashed border-gray-400"></div>
                </div>  
                
                <div class="text-sm">                            
                    <p class="flex justify-between">Subtotal:<span class="text-green-500">₱ {{ $userOrder->total_price }}</span></p>
                    <p class="flex justify-between">Discount:<span class="text-green-500">₱ 0.00</span></p>                            
                </div>
                <!-- Border -->
                <div class="relative flex py-5 items-center">
                    <div class="flex-grow border-t  border-gray-400"></div>
                </div>  
                
                <div>
                    <p class="flex justify-between font-bold">Total:<span class="text-green-500 font-bold">₱ {{ $userOrder->total_price }}</span></p>
                </div>
                <button class="bg-green-500 py-2 rounded-lg text-white font-medium w-full my-4">Pay now</button>
            </div>
        </div>
    @endif
</div>