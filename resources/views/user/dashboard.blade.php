@extends('../layouts.main')

@section('title', 'User Home')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
    <script src="{{ asset('javascript/index.js') }}"></script>
    <script src="{{ asset('javascript/carousel.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <div class="sticky top-0 flex items-center pl-8 h-uto w-full bg-[#1e4d2b] z-30  md:hidden">
            <i class='bx bx-menu bx-sm'></i>  
            <img class="h-auto w-40 " src="/img/landlogo.png">          
        </div>
        <x-user.user-sidebar />
        <div class=" sm:ml-[270px]" id="main-window">
            <div class=" flex h-screen w-full scroll-smooth">
                <div class="flex h-full w-full relative">
                    <div id="menu-side" class="h-full w-full">
                        <div id="carouselExampleSlidesOnly" class="m-4 rounded-md sm:relative" data-te-carousel-init data-te-carousel-slide>
                            <div class=" relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                                <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                                    data-te-carousel-item data-te-carousel-active>
                                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="w-full rounded-md h-44 sm:block sm:w-full sm:h-auto sm:rounded-md"
                                        alt="Wild Landscape" />
                                </div>
                                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                                    data-te-carousel-item>
                                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="w-full rounded-md h-44 sm:block sm:w-full sm:h-auto sm:rounded-md"
                                        alt="Camera" />
                                </div>
                                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                                    data-te-carousel-item>
                                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class=" w-full rounded-md h-44 sm:block sm:w-full sm:h-auto sm:rounded-md"
                                        alt="Exotic Fruits" />
                                </div>
                            </div>
                        </div>
    
                        <p id="best-seller-title" class="text-left text-2xl text-green-950 font-bold sm:text-center sm:text-3xl mx-5">Best Sellers</p>
                        <div id="best-seller" class="flex overflow-x-scroll ml-5 h-96 sm:overflow-x-hidden w-full sm:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:p-8">
                            <div class="w-auto h-50 my-4 sm:m-4 sm:p-4 sm:w-5/6 sm:h-5/6">
                                <div class="h-fit sm:flex justify-center items-center w-full h-52">
                                    <img src="/img/adobo.jpg" id="adobo" class="h-full w-full object-cover rounded-xl">
                                </div>
    
                                <div class="flex justify-center flex-col m-4">
                                    <h1 class="text-lg">Adobo</h1>
                                    <p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
    
                            <div class="m-4 p-4 w-fit h-fit ">
                                <div class="flex items-center justify-center w-full h-[200px]">
                                    <img src="/img/adobo.jpg" id="adobo" class="h-full w-full object-cover rounded-xl">
                                </div>
    
                                <div class="flex justify-center flex-col m-4">
                                    <h1 class="text-lg">Adobo</h1>
                                    <p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
    
                            <div class="m-4 p-4">
                                <div class="flex items-center justify-center w-full h-[200px]">
                                    <img src="/img/adobo.jpg" id="adobo" class="h-full w-full object-cover rounded-xl">
                                </div>
    
                                <div class="flex justify-center flex-col m-4">
                                    <h1 class="text-lg">Adobo</h1>
                                    <p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
    
                        </div>

                        <div class="flex flex-col  sm:flex-row w-auto h-fit justify-center items-center m-12 bg-green-200 rounded-lg p-8">
                            <div class="h-fit w-1/2 p-8">
                                <img class="object-contain" src="/img/burger.png" alt="new product" id="new-burger">
                            </div>
                            <div class="w-1/2 p-8">
                                <h1 class="text-zinc-800">New Product</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium
                                    ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Curabitur
                                    non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor
                                    eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat.</p>
                            </div>
                        </div>

                        {{--<div class="h-1/2 flex justify-items-start bg-green-200 m-4 rounded-lg">
                            <div class="h-full flex flex-row items-center justify-evenly">
                                <img src="/img/burger.png" alt="new product" id="new-burger">
                                <div class="w-1/2">
                                    <h1 class="text-zinc-800">New Product</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium
                                        ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Curabitur
                                        non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor
                                        eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat.</p>
                                </div>
                            </div> 
                        </div>--}}

                        <div class="flex justify-center items-center w-auto h-96 m-12">
                            <div>
                                <h1>Special Promo</h1>
                                <p>Valentine's Sales 30% off to all product</p>
                            </div>
                            <div class="h-fit w-1/2 p-8">
                                <img class="object-contain" src="/img/promo.svg" alt="promo" class="h-[450px] w-[450px]">
                            </div>
    
                        </div>
    
                        
                        {{--
                        <div class="h-1/2">
                            <div class="h-full bg-white flex flex-row-reverse items-center justify-evenly">
                                <img src="/img/promo.svg" alt="promo" class="h-[450px] w-[450px]">

                                <div id="promo-info">
                                    <h1>Special Promo</h1>
                                    <p>Valentine's Sales 30% off to all product</p>
                                </div>
                            </div>
                        </div>

                            --}}
                    </div>
                </div>
    
            </div>
        </div>
    </div>
@endsection