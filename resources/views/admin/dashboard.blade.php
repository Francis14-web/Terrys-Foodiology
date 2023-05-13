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
            
            <div class="w-full h-full flex p-10 justify-center">
                <div class="border-dashed border border-red-500 flex h-full flex-col p-5">
                    <p class="font-semibold text-2xl">Menu</p>
                        <nav x-data="{open: false}" class="mt-4">
                            <button @click="open = !open" x-bind:class="open ? 'bg-green-800 text-white' : 'text-green-800'" class=" font-medium py-1 px-3 rounded-full hover:bg-green-800 hover:text-white">Rice Meal</button>
                            <button @click="open = !open" x-bind:class="open ? 'bg-green-800 text-white' : 'text-green-800'" class="pasta-button font-medium py-1 px-3 rounded-full hover:bg-green-800 hover:text-white">Pasta</button>
                            <button class="text-green-800 font-medium py-1 px-3 rounded-full hover:bg-green-800 hover:text-white">Snacks</button>
                            <button class="text-green-800 font-medium py-1 px-3 rounded-full hover:bg-green-800 hover:text-white">Coffee</button>
                            <button class="text-green-800 font-medium py-1 px-3 rounded-full hover:bg-green-800 hover:text-white">Drinks</button>
                            <button class="text-green-800 font-medium py-1 px-3 rounded-full hover:bg-green-800 hover:text-white">Desserts</button>
                        </nav>
                
                </div>

                <div class="border-dashed border border-blue-500 h-full p-4">
                    <div class="flex gap-4">
                        <div class="w-40 h-24 border-dashed border border-red-500 flex gap-3 justify-center items-center p-4">
                            <p class="text-5xl text-green-500 font-bold">14</p>
                            <p class="text-lg font-medium">Total Product</p>
                        </div>
                        <div class="w-40 h-24 border-dashed border border-red-500 flex gap-3 justify-center items-center p-4">
                            <p class="text-5xl text-green-500 font-bold">4</p>
                            <p class="text-lg font-medium">Product Left</p>
                        </div>
                    </div>
                    <div class="flex mt-4 gap-4 items-center">
                        <p class="font-semibold text-2xl">Statistics</p>                       
                        <x-dropdown-field label="" name="role" :options="
                        ['Daily' => 'Daily',    
                        'Weekly' => 'Weekly',
                        'Monthly' => 'Monthly',
                        'Yearly' => 'Yearly',]" />                       
                    </div>

                    
                        <div class="py-8 rounded-lg h-72">
                            <canvas class="bg-white rounded-md" id="myChart"></canvas>
                        </div>
                    
                    
                    <div class="border-dashed border border-red-500 h-28">
                        <p class="p-2 font-semibold">Total sales today:</p>
                        <p class="text-5xl text-center text-green-600 font-bold">5,200 </p>
                    </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection