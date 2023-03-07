@extends('../layouts.main')

@section('title', 'User Home')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
    <script src="{{ asset('javascript/index.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-user.user-sidebar />
        <div class="ml-[270px]" id="main-window">
            <div class=" flex h-screen w-full scroll-smooth">
                <div class="flex h-full w-full relative">
                    <div id="menu-side" class="h-full w-full">
                        <div id="carouselExampleSlidesOnly" class="relative" data-te-carousel-init data-te-carousel-slide>
                            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                                <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                                    data-te-carousel-item data-te-carousel-active>
                                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="block w-full"
                                        alt="Wild Landscape" />
                                </div>
                                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                                    data-te-carousel-item>
                                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="block w-full"
                                        alt="Camera" />
                                </div>
                                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                                    data-te-carousel-item>
                                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="block w-full"
                                        alt="Exotic Fruits" />
                                </div>
                            </div>
                        </div>
    
                        <p id="best-seller-title" class="text-center text-3xl m-5">Best Sellers</p>
                        <div id="best-seller" class="w-full flex flex-row justify-center items-center p-8 gap-x-[5%]">
                            <div class="cards">
                                <div id="card-picture" class="flex justify-center items-center w-full h-52">
                                    <img src="/img/adobo.jpg" id="adobo" class="h-full w-full object-cover rounded-xl">
                                </div>
    
                                <div class="flex justify-center flex-col m-4">
                                    <h1 class="text-lg">Adobo</h1>
                                    <p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
    
                            <div class="cards">
                                <div id="card-picture" class="flex items-center justify-center w-full h-[200px]">
                                    <img src="/img/adobo.jpg" id="adobo" class="h-full w-full object-cover rounded-xl">
                                </div>
    
                                <div class="flex justify-center flex-col m-4">
                                    <h1 class="text-lg">Adobo</h1>
                                    <p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
    
                            <div class="cards">
                                <div id="card-picture" class="flex items-center justify-center w-full h-[200px]">
                                    <img src="/img/adobo.jpg" id="adobo" class="h-full w-full object-cover rounded-xl">
                                </div>
    
                                <div class="flex justify-center flex-col m-4">
                                    <h1 class="text-lg">Adobo</h1>
                                    <p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                                </div>
                            </div>
                        </div>
    
                        <div class="h-1/2">
                            <div class="h-full bg-white flex flex-row-reverse items-center justify-evenly">
                                <img src="/img/promo.svg" alt="promo" class="h-[450px] w-[450px]">
                                <div id="promo-info">
                                    <h1>Special Promo</h1>
                                    <p>Valentine's Sales 30% off to all product</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
@endsection