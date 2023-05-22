@extends('../layouts.main')

@section('title', 'User Home')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
    <script src="{{ asset('javascript/index.js') }}"></script>
    <script src="{{ asset('javascript/carousel.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <div class="fixed top-0 flex items-center pl-8 h-uto w-full bg-[#1e4d2b] z-30 max-w-[762px] md:hidden">
            <i class='bx bx-menu bx-sm'></i>  
            <img class="h-auto w-40 " src="/img/landlogo.png">          
        </div>
        <x-user.user-sidebar />
        <div class="sm:mt-14 md:ml-[270px] md:mt-5" id="main-window">
            <div class=" flex h-screen w-full scroll-smooth">
                <div class="flex h-full w-full relative">
                    <div id="menu-side" class="h-full w-full">
                        <div id="carouselExampleSlidesOnly" class="mx-5 my-12 rounded-md sm:relative lg:mx-5 lg:my-5" data-te-carousel-init data-te-carousel-slide>
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
    
                        <p id="best-seller-title" class="pt-5 text-2xl text-emerald-900 text-center md:text-3xl mx-5">Best Sellers</p>
                        <div id="best-seller" class="flex overflow-x-scroll gap-4 h-auto sm:overflow-x-hidden md:w-full md:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:p-8">
                            
                            <div class="flex p-2 flex-col w-fit max-content m-5 hover:bg-green-200 hover:rounded-lg hover:bg-opacity-70 sm:m-4 sm:p-4 sm:w-5/6 sm:h-5/6 sm:hover:bg-transparent">
                                <div class="h-36  w-36 sm:flex justify-center items-center sm:w-full sm:h-52">
                                    <img src="/img/adobo.jpg" id="adobo" class="h-full w-full object-cover rounded-xl">
                                </div>
    
                                <div class="h-fit w-fit sm:flex justify-center flex-col p-4">
                                                                <h1 class="text-base sm:text-lg">Adobo</h1>
                                    <p class="text-sm sm:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>

                            <div class="flex p-2 flex-col w-fit max-content m-5 hover:bg-green-200 hover:rounded-lg hover:bg-opacity-70 sm:m-4 sm:p-4 sm:w-5/6 sm:h-5/6 sm:hover:bg-transparent">
                                <div class="h-36  w-36 sm:flex justify-center items-center sm:w-full sm:h-52">
                                    <img src="/img/adobo.jpg" id="adobo" class="h-full w-full object-cover rounded-xl">
                                </div>
    
                                <div class="h-fit w-fit sm:flex justify-center flex-col p-4">
                                                                <h1 class="text-base sm:text-lg">Adobo</h1>
                                    <p class="text-sm sm:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>

                            <div class="flex p-2 flex-col w-fit max-content m-5 hover:bg-green-200 hover:rounded-lg hover:bg-opacity-70 sm:m-4 sm:p-4 sm:w-5/6 sm:h-5/6 sm:hover:bg-transparent">
                                <div class="h-36  w-36 sm:flex justify-center items-center sm:w-full sm:h-52">
                                    <img src="/img/adobo.jpg" id="adobo" class="h-full w-full object-cover rounded-xl">
                                </div>
    
                                <div class="h-fit w-fit sm:flex justify-center flex-col p-4">
                                        <h1 class="text-base sm:text-lg">Adobo</h1>
                                    <p class="text-sm sm:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
    
                        </div>

                        <div class="flex flex-col m-5 w-auto p-2 justify-center lg:flex-row lg:w-auto h-fit lg:justify-center lg:items-center lg:m-12 bg-green-200 rounded-lg lg:p-8">
                            <h1 class="text-2xl text-emerald-900  sm:hidden">New Product </h1>
                            <div class="self-center h-56 w-56 md:h-fit md:w-1/2 lg:h-fit lg:w-1/2 md:p-8">
                                <img class="object-contain" src="/img/burger.png" alt="new product" id="new-burger" class="h-full w-full object-cover ">
                            </div>
                            <div class="flex flex-col w-auto lg:w-1/2 sm:p-8 ">
                                <h1 class="hidden sm:min-w-[770px] sm:block text-2xl text-emerald-900">New Product</h1>
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium
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

                        <div class="flex flex-col m-5 w-auto p-2 justify-center lg:flex-row lg:w-auto h-fit lg:justify-center lg:items-center lg:m-12 lg:p-8">
                            <div>
                                <h1 class="block text-2xl text-emerald-900 ">Special Promo</h1>
                                <p class="hidden lg:block text-base">Valentine's Sales 30% off to all product</p>
                            </div>
                            <div class="self-center h-auto w-56 m-6 md:h-fit md:w-1/2 lg:h-fit lg:w-1/2 md:p-8">
                                <img class="object-contain" src="/img/promo.svg" alt="promo" class="h-full w-full object-cover ">
                            </div>
                            <p class="text-base lg:hidden">Valentine's Sales 30% off to all product</p>
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