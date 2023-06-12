
<div>
    <div class="flex h-screen justify-between">
    <div class="sm:ml-[270px] relative" id="main-window">
        <x-user.user-heading title="Menu" />
        <div class="mx-auto flex justify-center pb-8 scrollbar-thumb-red-400 overflow-hidden">
            <div class="sm:w-full relative w-96 flex flex-col p-5">
                <!-- category title -->                      
                <div class="sm:w-full sm:flex-row flex-col-reverse flex justify-between gap-4">
                    <div class="flex gap-5 overflow-x-scroll sm:overflow-x-hidden">
                        <button wire:click="setCategory('Rice Meal')" class="{{ ($category) == 'Rice Meal' ? 'text-white text-sm bg-green-800 w-auto h-10 px-8 sm:px-4 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-auto h-10 sm:px-4 px-8 rounded-lg'}}">
                            Rice Meal
                        </button>
                        <button wire:click="setCategory('Pasta')" class="{{ ($category) == 'Pasta' ? 'text-white text-sm bg-green-800 w-auto h-10 px-8 sm:px-4 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-auto h-10 sm:px-4 px-8 rounded-lg'}}">
                            Pasta
                        </button>
                        <button wire:click="setCategory('Snacks')" class="{{ ($category) == 'Snacks' ? 'text-white text-sm bg-green-800 w-auto h-10 px-8 sm:px-4 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-auto h-10 sm:px-4 px-8 rounded-lg'}}">
                            Snacks
                        </button>
                        <button wire:click="setCategory('Coffee')" class="{{ ($category) == 'Coffee' ? 'text-white text-sm bg-green-800 w-auto h-10 px-8 sm:px-4 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-auto h-10 sm:px-4 px-8 rounded-lg'}}">
                            Coffee
                        </button>
                        <button wire:click="setCategory('Drinks')" class="{{ ($category) == 'Drinks' ? 'text-white text-sm bg-green-800 w-auto h-10 px-8 sm:px-4 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-auto h-10 sm:px-4 px-8 rounded-lg'}}">
                            Drinks
                        </button>
                        <button wire:click="setCategory('Desserts')" class="{{ ($category) == 'Desserts' ? 'text-white text-sm bg-green-800 w-auto h-10 px-8 sm:px-4 rounded-lg' : 'text-green-800 text-sm bg-slate-100 transition duration-300 ease-in-out hover:bg-green-800 hover:text-white w-auto h-10 sm:px-4 px-8 rounded-lg'}}">
                            Desserts
                        </button>        
                    </div>
                    <div class="flex relative">
                        <input type="text" wire:model="search" class=" text-sm border-transparent font-semibold bg-slate-100 rounded-3xl py-2 px-4" placeholder="Search">
                    </div>
                </div>        
                <!---card -->
                @if ($foods->count() > 0)
                    <div class="grid gap-5 grid-cols-1 sm:grid-cols-5  mt-4">
                        @foreach ($foods as $food)
                            @php
                                $imagePaths = explode(',', $food->food_image);
                                $lastImagePath = end($imagePaths);
                            @endphp
                            <x-canteen.canteen-poscard :food="$food" :lastImagePath="$lastImagePath"/>
                        @endforeach
                    </div>
                @else
                    <div class="w-full mt-10 flex flex-col ">
                        <div class="self-center h-auto w-2/5 md:h-auto md:w-1/3 ">
                            <img src="/img/nofood.png" class="h-full w-full object-contain">
                        </div>
                        <p class="text-center text-xl sm:text-3xl font-semibold">No food found</p>
                    </div>
                @endif
                <div class="my-10 w-full flex justify-end">
                    {{ $foods->links() }}
                </div>
            </div>
        </div>
    </div>

    
    
    @if($userOrder)
        <div class="bg-white sm:flex hidden max-w-xs w-full max-h-screen border-l relative p-5 flex-col">
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
                    {{-- <p class="flex justify-between">Discount:<span class="text-green-500">₱ 0.00</span></p>                             --}}
                </div>
                <!-- Border -->
                <div class="relative flex py-5 items-center">
                    <div class="flex-grow border-t  border-gray-400"></div>
                </div>  
                <x-dropdown-field label="Pickup Time" name="pickup_time" :options="$order_time"/>
                <div>
                    <p class="flex justify-between font-bold">Total:<span class="text-green-500 font-bold">₱ {{ $userOrder->total_price }}</span></p>
                </div>
                <button wire:click="paymentButton" class="bg-green-500 py-2 rounded-lg text-white font-medium w-full my-4">Pay now</button>
            </div>
        </div>
    @endif
</div>


<!-- Mobile View -->
<div class="fixed hidden sm:hidden top-0 h-screen bg-gray-500 opacity-70 w-full" id="view-bg">
</div>
<div id="view-order"  class="sm:hidden hidden inset-x-0 bottom-0 bg-green-500 py-4 px-2 font-semibold text-center">
    <p class="text-white">View Order</p>
</div> 
    @if($userOrder)
        <div id="order-detail" class="bg-white sm:hidden sm:flex fixed sm:max-w-xs  bottom-0 inset-x-0  max-h-screen border-l sm:relative  p-5  flex-col">
            <div class="flex-1">
                <div class="flex justify-between items-center">
                    <p class="font-semibold text-base mb-2">Orders Details</p>
                    <div class="text-green-600 z-30" id="cancelBtn">
                        <i class='bx bx-x bx-sm' style="color:#16a34a"></i>
                    </div>
                </div>
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
                    {{-- <p class="flex justify-between">Discount:<span class="text-green-500">₱ 0.00</span></p>                             --}}
                </div>
                <!-- Border -->
                <div class="relative flex py-5 items-center">
                    <div class="flex-grow border-t  border-gray-400"></div>
                </div>  
                <x-dropdown-field label="Pickup Time" name="pickup_time" :options="$order_time"/>
                <div>
                    <p class="flex justify-between font-bold">Total:<span class="text-green-500 font-bold">₱ {{ $userOrder->total_price }}</span></p>
                </div>
                <button wire:click="paymentButton" class="bg-green-500 py-2 rounded-lg text-white font-medium w-full my-4">Pay now</button>
            </div>
        </div>
    @endif
    </div>

</div>

