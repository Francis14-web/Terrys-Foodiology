@extends('../layouts.main')

@section('title', 'Canteen Menu')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-canteen.canteen-sidebar />
        <div class="ml-[270px] h-full" id="main-window">
            <x-heading title="Point of Sales" />

                <div class="w-full h-full flex p-10 justify-center">                    
                    <div class="bg-blue-500 flex h-full flex-col p-5">
                        <!-- category title -->                      
                            <div class="flex gap-5">
                                <div class="bg-green-500 w-24 h-10 flex justify-center items-center rounded-lg text-sm">
                                Rice Meal
                                </div>
                                <div class="bg-green-500 w-24 h-10 flex justify-center items-center rounded-lg text-sm">
                                    Pasta
                                </div>
                                <div class="bg-green-500 w-24 h-10 flex justify-center items-center rounded-lg text-sm">
                                    Snacks
                                </div>
                                <div class="bg-green-500 w-24 h-10 flex justify-center items-center rounded-lg text-sm">
                                    Coffee
                                </div>
                                <div class="bg-green-500 w-24 h-10 flex justify-center items-center rounded-lg text-sm">
                                    Drinks
                                </div>
                                <div class="bg-green-500 w-24 h-10 flex justify-center items-center rounded-lg text-sm">
                                    Desserts
                                </div>        
                            </div>        
                        

                        <!-- Main Content -->
                        <div>
                            <!---card -->
                            <div class="py-5">
                                <p>TEST CARD</p>
                            </div>
                        </div>
                    </div>

                    
                    <div class="bg-yellow-500 h-full">
                        <p class="font-semibold text-base m-4 text-center">Orders Details</p>
                        <!-- Order Section -->
                        <div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection