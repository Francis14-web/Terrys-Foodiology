@extends('../layouts.main')

@section('title', 'User Messages')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-user.user-sidebar />
        <div class="ml-[270px] gap-5 flex-col">
            <div id="main-window">
                <x-heading title="Messages" />
            </div>    
        </div>
        
            <div class="ml-[270px]">
                <div class="flex mt-8 pl-24 w-full pr-10">
                    <div class="mr-2">
                        <div class="flex mb-2 gap-3 bg-emerald-100 p-2 border-solid border border-black rounded-l-lg">
                            <div class=" max-w-[50px]">
                                <img class="object-cover  rounded-full" src="/pictures/Unggoy.jpg">
                            </div>
                            <div class="flex flex-col justify-between">
                                <div class=" text-xl">
                                <h1>Canteen</h1>
                                </div>
                                <div class="text-xs">
                                    Canteen:Lorem ipsum dolor sit am. 
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-3 bg-slat  e-400 p-2 border-solid border border-black rounded-l-lg">
                            <div class=" max-w-[50px]">
                                <img class="object-cover  rounded-full" src="/pictures/Unggoy.jpg">
                            </div>
                            <div class="flex flex-col justify-between">
                                <div class=" text-xl">
                                <h1>Admin</h1>
                                </div>
                                <div class="text-xs">
                                    Admin:Lorem ipsum dolor sit am. 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="h-[450px] w-7/12 bg-emerald-50 shadow rounded-r-lg">
                        <div class="flex space-between gap-2 h-14 w-full bg-emerald-100 shadow rounded-tr-lg">
                            <div class="ml-2 mt-2 max-w-[40px]">
                                <img class="object-cover rounded-full" src="/pictures/Unggoy.jpg">
                            </div>
                            <div class="mt-2">
                                <p>Admin</p>
                                <p class="text-xs">Active</p></p>
                            </div>
                        </div>
                            <div class="flex items-end h-[394px] pb-">
                              <div class="flex gap-2 h-14 w-full bg-emerald-50 shadow rounded-br-lg">
                                <div class="ml-6 flex items-center gap-2"><textarea class="h-8 w-96 rounded-full" name="message" placeholder="Aa" rows="2" cols="100"></textarea>
                                    <i class='bx bx-smile bx-sm'  style='color:#1b3122 '  ></i><div class="flex items-center justify-center h-8 w-8 rounded-full bg-emerald-100"><i class='bx bxs-send bx-xs' style='color:#1b3122'  ></i></div>
                                 </div>
                            
                                </div>  
                            </div>
                        
                    </div>
                </div>
            </div>
    </div>

 
@endsection