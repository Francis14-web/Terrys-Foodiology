@extends('../layouts.main')

@section('title', 'Canteen Menu')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-full">
        <x-canteen.canteen-sidebar />
        <div class="ml-[270px] h-full" id="main-window">
            <x-heading title="Point of Sales" />

                <div class="w-full flex p-10 justify-center">                    
                    <div class="w-full flex flex-col p-5">
                        <!-- category title -->                      
                            <div class="flex w-full gap-5">
                                <button class="bg-slate-100 text-green-800 hover:bg-green-800  hover:text-white w-24 h-10 flex justify-center items-center rounded-lg text-sm">
                                Rice Meal
                                </button>
                                <button class="bg-slate-100 text-green-800 hover:bg-green-800  hover:text-white w-24 h-10 flex justify-center items-center rounded-lg text-sm">
                                    Pasta
                                </button>
                                <button class="bg-slate-100 text-green-800 hover:bg-green-800  hover:text-white w-24 h-10 flex justify-center items-center rounded-lg text-sm">
                                    Snacks
                                </button>
                                <button class="bg-slate-100 text-green-800 hover:bg-green-800  hover:text-white w-24 h-10 flex justify-center items-center rounded-lg text-sm">
                                    Coffee
                                </button>
                                <button class="bg-slate-100 text-green-800 hover:bg-green-800  hover:text-white w-24 h-10 flex justify-center items-center rounded-lg text-sm">
                                    Drinks
                                </button>
                                <button class="bg-slate-100 text-green-800 hover:bg-green-800 hover:text-white w-24 h-10 flex justify-center items-center rounded-lg text-sm">
                                    Desserts
                                </button>        
                            </div>        
                        

                        <!-- Main Content -->
                        <div>
                            <!---card -->
                            <div class="grid gap-5 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-4">
                                <x-canteen.canteen-poscard/>
                                <x-canteen.canteen-poscard/>
                                <x-canteen.canteen-poscard/>
                                <x-canteen.canteen-poscard/>
                                <x-canteen.canteen-poscard/>
                                <x-canteen.canteen-poscard/>
                            </div>
                        </div>
                    </div>

                    
                    <div class="bg-slate-100 w-96 px-4 ">
                        <p class="font-semibold text-base mt-4 mb-2">Orders Details</p>
                        <!-- Border -->
                        <div class="relative flex pb-5 items-center">
                            <div class="flex-grow border-t  border-gray-400"></div>
                        </div>  
                        <!-- Order Section -->
                        <div class="overflow-y-scroll h-80">
                            <x-canteen.canteen-order-card/>
                            <x-canteen.canteen-order-card/>
                            <x-canteen.canteen-order-card/>
                            <x-canteen.canteen-order-card/>
                            <x-canteen.canteen-order-card/>
                            <x-canteen.canteen-order-card/>                            
                        </div>
                        <!-- Border -->
                        <div class="relative flex py-5 items-center">
                            <div class="flex-grow border-t border-dashed border-gray-400"></div>
                        </div>  
                        
                        <div class="text-sm">                            
                            <p class="flex justify-between">Subtotal:<span class="text-green-500">₱ 440.00</span></p>
                            <p class="flex justify-between">Discount:<span class="text-green-500">₱ 0.00</span></p>                            
                        </div>
                        <!-- Border -->
                        <div class="relative flex py-5 items-center">
                            <div class="flex-grow border-t  border-gray-400"></div>
                        </div>  
                        
                        <div>
                            <p class="flex justify-between font-bold">Total:<span class="text-green-500 font-bold">₱ 440.00</span></p>
                        </div>
                        <button class="bg-green-500 py-2 rounded-lg text-white font-medium w-full my-4">Pay now</button>
                    </div>

            </div>
        </div>
    </div>
@endsection