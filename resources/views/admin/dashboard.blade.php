@extends('../layouts.main')

@section('title', 'Admin Dashboard')

@section('js')
@endsection

@section('content')

    <div class="relative w-screen h-screen">
        <x-admin.admin-sidebar />
        <div class="ml-[270px] h-full">
            
            <div class="w-full flex p-10 justify-center">
                <div class=" flex h-full flex-col p-5">
                    @livewire('statistics-graph', [ 'graphs' => [
                        ['view' => 'tabs.admin.weekly-graph', 'data' =>  $weeklySales],
                        ['view' => 'tabs.admin.monthly-graph', 'data' => $monthlySales],
                        ['view' => 'tabs.admin.yearly-graph', 'data' =>  $yearlySales],
                    ]])  
                    <div class="flex gap-4">
                        <div class=" h-28 w-56">
                            <p class="p-2 font-semibold">Total sales Today:</p>
                            <p class="text-5xl text-center text-green-600">{{ $statistics['total_today_sales'] }} </p>
                        </div>

                        <div class=" h-28 w-56">
                            <p class="p-2 font-semibold">Total sales this Week:</p>
                            <p class="text-5xl text-center text-green-600">{{ $statistics['total_week_sales'] }} </p>
                        </div>
                    </div>
                    
                    <div class="flex gap-4">
                        <div class=" h-28 w-56">
                            <p class="p-2 font-semibold">Total sales this Month:</p>
                            <p class="text-5xl text-center text-green-600">{{ $statistics['total_month_sales'] }} </p>
                        </div>

                        <div class=" h-28 w-56">
                            <p class="p-2 font-semibold">Total sales this Year:</p>
                            <p class="text-5xl text-center text-green-600">{{ $statistics['total_year_sales'] }} </p>
                        </div>
                    </div>

                </div>

                <div class=" w-full  h-full p-4">
                    <div class="flex flex-col gap-4">
                        <div class=" flex flex-col gap-3 justify-center items-center p-4">                           
                            <div class="flex gap-3">
                                <p class="text-base text-green-500 font-medium">14</p>
                                <p class="text-base font-medium">Total Product</p>
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

                        <div class=" flex flex-col gap-3 justify-center items-center p-4">
                            <div class="flex gap-3">
                                <p class="text-base text-green-500 font-medium">24</p>
                                <p class="text-base font-medium">Product Left</p>
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
                                        
                    
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection