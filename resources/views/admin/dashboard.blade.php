@extends('../layouts.main')

@section('title', 'Admin Dashboard')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')

    <div class="relative w-screen h-screen">
        <x-admin.admin-sidebar />
        <div class="ml-[270px] h-full bg-gray-200" id="main-window">   
            <x-heading title="Dashboard" />
                <div class="flex justify-center">                 
                    <div class="flex p-4 flex-col">
                        
                        <div class="flex gap-4 pt-4">
                                <div class="p-2 h-28 w-40 bg-white rounded-lg">
                                    <p class="pb-4 font-semibold text-gray-400">Total sales this Today:</p>
                                    <p class="text-3xl text-green-600">{{ $statistics['total_today_sales'] }} </p>
                                </div>

                                <div class="p-2 h-28 w-40 bg-white rounded-lg">
                                    <p class="pb-4 font-semibold text-gray-400">Total sales this Week:</p>
                                    <p class="text-3xl text-green-600">{{ $statistics['total_week_sales'] }} </p>
                                </div>
                                            
                                <div class="p-2 h-28 w-40 bg-white rounded-lg">
                                    <p class="pb-4 font-semibold text-gray-400">Total sales this Month:</p>
                                    <p class="text-3xl text-green-600">{{ $statistics['total_month_sales'] }} </p>
                                </div>

                                <div class="p-2 h-28 w-40 bg-white rounded-lg">
                                    <p class="pb-4 font-semibold text-gray-400">Total sales this Year:</p>
                                    <p class="text-3xl text-green-600">{{ $statistics['total_year_sales'] }} </p>                        
                                </div>
                        </div>

                        <div class="flex">
                            <div class="w-full flex h-full flex-col pt-4">
                                @livewire('statistics-graph', [ 'graphs' => [
                                    ['view' => 'tabs.admin.weekly-graph', 'data' =>  $weeklySales],
                                    ['view' => 'tabs.admin.monthly-graph', 'data' => $monthlySales],
                                    ['view' => 'tabs.admin.yearly-graph', 'data' =>  $yearlySales],
                                ]])  
                            </div>              
                        </div>
                        <div class="w-full bg-white mt-4 p-4 rounded-md">
                            <p class=" text-green-600 font-bold">Top product</p>
                            <div class="flex mt-4 justify-between w-full">
                                <p class="font-semibold text-gray-400">Name</p>
                                <p class="font-semibold text-gray-400">Product's I.D</p>
                                <p class="font-semibold text-gray-400">Total Sold</p>
                                <p class="font-semibold text-gray-400">Total Sales</p>
                            </div>
                        </div>
                    </div>                              
                    <div class="w-96 h-full p-4">
                            <div class="flex flex-col gap-4">                   
                                <div class=" flex flex-col gap-3 p-4 bg-white rounded-lg">                           
                                    <div class="flex gap-3">
                                        <p class="text-lg font-medium">Total Product: <span class="text-lg text-green-500 font-medium">14</span></p>
                                    </div>

                                    <div class="flex flex-col w-full ">
                                        <div class="flex justify-between">
                                            <p>Adobo Rice Meal</p>
                                            <p>x3</p>
                                        </div>
                                        <div class="flex justify-between">
                                            <p>Burger with Cheese</p>
                                            <p>x6</p>
                                        </div>
                                        <div class="flex justify-between">
                                            <p>Coffee</p>
                                            <p>x2</p>
                                        </div>
                                        <div class="flex justify-between">
                                            <p>Pasta</p>
                                            <p>x3</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="flex flex-col gap-3 p-4 bg-white rounded-lg">
                                    <div class="flex gap-3">                               
                                        <p class="text-lg font-medium">Product Left: <span class="text-lg text-green-500 font-medium">24</span></p>
                                    </div>

                                    <div class="flex flex-col w-full ">
                                        <div class="flex justify-between">
                                            <p>Adobo Rice Meal</p>
                                            <p>x3</p>
                                        </div>
                                        <div class="flex justify-between">
                                            <p>Burger with Cheese</p>
                                            <p>x6</p>
                                        </div>
                                        <div class="flex justify-between">
                                            <p>Coffee</p>
                                            <p>x2</p>
                                        </div>
                                        <div class="flex justify-between">
                                            <p>Pasta</p>
                                            <p>x3</p>
                                        </div>
                                        <div class="flex justify-between">
                                            <p>Menudo Rice</p>
                                            <p>x6</p>
                                        </div>
                                        <div class="flex justify-between">
                                            <p>Sinigang Rice</p>
                                            <p>x4</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <button class="bg-green-500 w-full py-2 rounded-md text-white font-semibold mt-4">Print Bills</button>                                                           
                            </div>

                        
                    
                    </div>               
                </div>               
        </div>                 
    </div>            


@endsection