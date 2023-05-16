@extends('../layouts.main')

@section('title', 'Canteen Menu')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen overflow-hidden">
        <x-canteen.canteen-sidebar />
        <div class="ml-[270px] absolute h-full w-full flex flex-col" id="main-window">
            <x-heading title="Point of Sales" />

                <div class="h-full flex m-8">
                    <div class="bg-blue-500 w-[75%] h-full flex justify-center">
                        <!-- category title -->
                        <div class="grid grid-cols-6 w-8/12 place-content-start place-items-center">
                            <div class="bg-green-500 w-28 h-16 flex justify-center items-center">
                                Rice Meal
                            </div>
                            <div class="bg-green-500 w-28 h-16 flex justify-center items-center">
                                Pasta
                            </div>
                            <div class="bg-green-500 w-28 h-16 flex justify-center items-center">
                                Snacks
                            </div>
                            <div class="bg-green-500 w-28 h-16 flex justify-center items-center">
                                Coffee
                            </div>
                            <div class="bg-green-500 w-28 h-16 flex justify-center items-center">
                                Drinks
                            </div>
                            <div class="bg-green-500 w-28 h-16 flex justify-center items-center">
                                Desserts
                            </div>                       
                        </div>

                        <!-- Main Content -->
                        <div>

                        </div>
                </div>

                <!-- Order Tab -->
                <div class="bg-yellow-500 h-full w-[35%] overflow-hidden">
                    <p class="font-semibold text-3xl m-4 text-center">Orders</p>
                    <!-- Order Section -->
                    <div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection