@extends('../layouts.main')

@section('title', 'User Home')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
    <script src="{{ asset('javascript/index.js') }}"></script>
    <script src="{{ asset('javascript/dropdown.js') }}"></script>
    <script src="{{ asset('javascript/carousel.js') }}"></script>
@endsection

@section('content')
    <div div class="relative w-screen h-screen">    
        <x-user.mobile-navbar/>
        <x-user.user-sidebar />
        <div class="sm:ml-[270px]" id="main-window">
            <div class=" flex h-screen w-full scroll-smooth">
                <div class="flex h-full w-full relative">
                    <div id="menu-side" class="h-full w-full">
                        <div id="carouselExampleSlidesOnly" class="mx my rounded-none sm:rounded-md sm:relative sm:mx-5 lg:my-5" data-te-carousel-init data-te-carousel-slide>
                            <div class=" relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                                <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                                    data-te-carousel-item data-te-carousel-active>
                                    <img src="/img/Wel.jpg" class="w-full rounded-none h-72 sm:block sm:w-full sm:h-auto sm:rounded-md"
                                        alt="Welcome, Dear Customer" />
                                </div>
                                <div class="relative float-left -mr-[100%] hidden h-fit w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                                    data-te-carousel-item>
                                    <img src="/img/bestcoffee.jpg" class="w-full rounded-none h-72 sm:block sm:w-full sm:h-auto sm:rounded-md"
                                        alt="Best Seller Coffee" />
                                </div>
                                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                                    data-te-carousel-item>
                                    <img src="/img/bestfood.jpg" class=" w-full rounded-none h-72 sm:block sm:w-full sm:h-auto sm:rounded-md"
                                        alt="Best Seller Food" />
                                </div>
                            </div>
                        </div>
    
                        <p id="best-seller-title" class="pt-5 text-2xl text-emerald-900 text-center md:text-3xl mx-5">Best Sellers</p>
                        <div class="flex flex-col">
                            <div id="best-seller" class="flex overflow-x-scroll gap-4 h-auto sm:overflow-x-hidden md:w-full md:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:px-8">                            
                                <div class="flex p-2 flex-col w-fit max-content m-5 hover:bg-green-200 hover:rounded-lg hover:bg-opacity-70 sm:m-4 sm:px-4 sm:w-5/6 sm:h-5/6 sm:hover:bg-transparent">
                                    <div class="h-36  w-36 sm:flex justify-center items-center sm:w-full sm:h-52">
                                        <img src="/img/adobo.jpg" id="adobo" class="h-full w-full object-cover rounded-xl">
                                    </div>
        
                                    <div class="h-fit w-fit sm:flex justify-center flex-col p-4">
                                        <h1 class="text-base sm:text-lg">Adobo</h1>
                                        <p class="text-sm sm:text-base">A spicy marinade used in Latin American cuisine and usually containing vinegar, garlic, and chili peppers..</p>
                                    </div>
                                </div>

                                <div class="flex p-2 flex-col w-fit max-content m-5 hover:bg-green-200 hover:rounded-lg hover:bg-opacity-70 sm:m-4 sm:p-4 sm:w-5/6 sm:h-5/6 sm:hover:bg-transparent">
                                    <div class="h-36  w-36 sm:flex justify-center items-center sm:w-full sm:h-52">
                                        <img src="/img/coffee.jpg" id="adobo" class="h-full w-full object-cover rounded-xl">
                                    </div>
        
                                    <div class="h-fit w-fit sm:flex justify-center flex-col p-4">
                                        <h1 class="text-base sm:text-lg">Coffee Americano</h1>
                                        <p class="text-sm sm:text-base">An americano is quite simply just hot water and espress</p>
                                    </div>
                                </div>

                                <div class="flex p-2 flex-col w-fit max-content m-5 hover:bg-green-200 hover:rounded-lg hover:bg-opacity-70 sm:m-4 sm:p-4 sm:w-5/6 sm:h-5/6 sm:hover:bg-transparent">
                                    <div class="h-36  w-36 sm:flex justify-center items-center sm:w-full sm:h-52">
                                        <img src="/img/sisig.png" id="adobo" class="h-full w-full object-cover rounded-xl">
                                    </div>
        
                                    <div class="h-fit w-fit sm:flex justify-center flex-col p-4">
                                        <h1 class="text-base sm:text-lg">Sisig</h1>
                                        <p class="text-sm sm:text-base">The Filipino street food of chopped pig parts and chicken livers tossed with a spicy and sour dressing,.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center items-center">
                                <a href="{{ route('user.menu') }}" class=" bg-green-500 text-white px-5 py-2 rounded-lg">Order Now</a>
                            </div>
                        </div>

                        <div class="flex flex-col m-5 w-auto p-2 justify-center lg:flex-row lg:w-auto h-fit lg:justify-center lg:items-center lg:m-12 bg-green-200 rounded-lg lg:p-8">
                            <h1 class="text-2xl text-emerald-900 text-center sm:hidden">New Product </h1>
                            <div class="self-center h-56 w-56 md:h-fit md:w-1/2 lg:h-fit lg:w-1/2 md:p-8">
                                <img class="object-contain" src="/img/burger.png" alt="new product" id="new-burger" class="h-full w-full object-cover ">
                            </div>
                            <div class="flex flex-col w-auto lg:w-1/2 sm:p-8 ">
                                <h1 class="hidden sm:min-w-[770px] sm:block text-2xl  text-emerald-900 ">New Product: Cheese Burger</h1>
                                <p class="">A cheeseburger is a hamburger topped with cheese. Traditionally, the slice of cheese is placed on top of the meat patty. The cheese is usually added to the hamburger patty near the end of the cooking time, which allows the cheese to melt. Cheeseburgers can include variations in structure, ingredients and composition.</p>
                            </div>
                        </div>


                        <div class="flex flex-col m-5 w-auto p-4 justify-center lg:flex-row lg:w-auto h-fit lg:justify-center lg:items-center lg:m-12 lg:p-8">
                            <div>
                                <h1 class="block text-2xl text-emerald-900 text-center">Special Promo</h1>
                                <p class="hidden lg:block text-base">Valentine's Sales 30% off to all product</p>
                            </div>
                            <div class="self-center h-auto w-56 m-6 md:h-fit md:w-1/2 lg:h-fit lg:w-1/2 md:p-8">
                                <img class="object-contain" src="/img/promo.svg" alt="promo" class="h-full w-full object-cover ">
                            </div>
                            <p class="text-base lg:hidden">Valentine's Sales 30% off to all product</p>
                        </div>

                    </div>
                </div>
    
            </div>
        </div>
    </div>
@endsection