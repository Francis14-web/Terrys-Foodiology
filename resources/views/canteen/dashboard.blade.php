@extends('../layouts.main')

@section('title', 'Canteen Dashboard')

@section('js')
    <script src="{{ asset('javascript/carousel.js') }}"></script>
@endsection

@section('content')

<div class="relative h-screen">
    <x-canteen.canteen-sidebar />
    <div class="ml-[270px]">
        <div class=" flex h-screen w-full scroll-smooth">
            <div class="flex h-full w-full relative">
                <div id="menu-side" class="h-full w-full">
                    <x-canteen.canteen-carousel></x-canteen.canteen-carousel>
                    <p id="best-seller-title" class="text-center text-3xl m-5">Best Sellers</p>
                    <div id="best-seller" class="w-full flex flex-row justify-center items-center p-8 gap-x-[5%]">
                        <div class="cards">
                            <div id="card-picture" class="flex justify-center items-center w-full h-52">
                                <img src="/img/adobo.jpg" id="adobo" class="h-full w-full object-cover rounded-xl">
                            </div>

                            <div class="flex justify-center flex-col m-4">
                                <h1 class="text-lg">Adobo</h1>
                                <p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <button type="button" class="edit-btn">Edit</button>
                            </div>
                        </div>

                        <div class="cards">
                            <div id="card-picture" class="flex items-center justify-center w-full h-[200px] h-">
                                <img src="/img/adobo.jpg" id="adobo" class="h-full w-full object-cover rounded-xl">
                            </div>

                            <div class="flex justify-center flex-col m-4">
                                <h1 class="text-lg">Adobo</h1>
                                <p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <button type="button" class="edit-btn">Edit</button>
                            </div>
                        </div>

                        <div class="cards">
                            <div id="card-picture" class="flex items-center justify-center w-full h-[200px]">
                                <img src="/img/adobo.jpg" id="adobo" class="h-full w-full object-cover rounded-xl">
                            </div>

                            <div class="flex justify-center flex-col m-4">
                                <h1 class="text-lg">Adobo</h1>
                                <p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <button type="button" class="edit-btn">Edit</button>
                            </div>
                        </div>


                    </div>

                    <div class="h-1/2 flex justify-items-start bg-green-200 m-4 rounded-lg">
                        <div class="h-full flex flex-row items-center justify-evenly">
                            <img src="/img/burger.png" alt="new product" id="new-burger">
                            <div class="w-1/2">
                                <h1 class="text-zinc-800">New Product</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium
                                    ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Curabitur
                                    non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor
                                    eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat.</p>
                                <button type="button"
                                    class="w-[20%] rounded-lg border-none bg-white text-zinc-800 font-extralight mt-2 point cursor-pointer p-1 hover:scale-105 hover:bg-green-500 hover:text-white hover:font-semibold transition-all duration-300 ease-in-out">Edit</button>
                            </div>
                        </div>
                    </div>

                    <div class="h-1/2">
                        <div class="h-full bg-white flex flex-row-reverse items-center justify-evenly">
                            <img src="/img/promo.svg" alt="promo" class="h-[450px] w-[450px]">
                            <div id="promo-info">
                                <h1>Special Promo</h1>
                                <p>Valentine's Sales 30% off to all product</p>
                                <button type="button"
                                    class="w-[40%] rounded-lg border-none bg-green-200 text-zinc-800 font-extralight mt-2 point cursor-pointer p-1 hover:scale-105 hover:bg-green-500 hover:text-white hover:font-semibold transition-all duration-300 ease-in-out">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="/javascript/index.js"></script>

        </div>
    </div>


    @endsection