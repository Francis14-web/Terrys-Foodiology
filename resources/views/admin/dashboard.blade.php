@extends('../layouts.main')

@section('title', 'Admin Dashboard')

@section('js')
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('javascript/admin-chart.js') }}"></script>    
@endsection



@section('content')

    <div class="relative w-screen h-screen">
        <x-admin.admin-sidebar />
        <div class="ml-[270px] h-full">
            
            <div class="w-full flex p-10 justify-center">
                <div class=" flex h-full flex-col p-5">
                    <div class="flex flex-col gap-4 items-center">
                        <h1 class="text-2xl font-semibold">Sales</h1>
                        <div class="flex w-full justify-between">
                            <p class="font-semibold text-2xl text-green-600">Statistics</p>                       
                            <x-admin.dropdown-admin label="" name="role" :options="
                            ['Daily' => 'Daily',    
                            'Weekly' => 'Weekly',
                            'Monthly' => 'Monthly',
                            'Yearly' => 'Yearly',]" />  
                        </div>                     
                    </div>

                    
                    <div class="py-5 rounded-lg">
                        <canvas class="bg-white rounded-md" id="myChart"></canvas>
                    </div>    
                    

                        <div class="flex gap-4">
                            <div class=" h-28 w-56">
                                <p class="p-2 font-semibold">Total sales Today:</p>
                                <p class="text-5xl text-center text-green-600">5,200 </p>
                            </div>

                            <div class=" h-28 w-56">
                                <p class="p-2 font-semibold">Total sales this Week:</p>
                                <p class="text-5xl text-center text-green-600">5,200 </p>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <div class=" h-28 w-56">
                                <p class="p-2 font-semibold">Total sales this Month:</p>
                                <p class="text-5xl text-center text-green-600">5,200 </p>
                            </div>

                            <div class=" h-28 w-56">
                                <p class="p-2 font-semibold">Total sales this Year:</p>
                                <p class="text-5xl text-center text-green-600">5,200 </p>
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