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

        <div class=" ml-[365px] mr-28 mt-4 flex w-fit max-w-max h-full">
            <!--message list start-->
            <div class="overflow-x-hidden w-[22vw] h-screen bg--700 shadow-inner justify-center py-2">
                <div class="flex w-auto px-2 py-2 items-center rounded-sm hover:bg-emerald-500 hover:bg-opacity-25">
                    <div class="pr-2 max-w-[50px]">
                        <img class="object-cover  rounded-full" src="/pictures/Unggoy.jpg">
                    </div>
                    <div class="flex flex-col w-full">
                        <div class="text-xl">
                            <h1>Canteen</h1>
                        </div>
                        <div class="text-xs">
                            <p>Canteen:Lorem ipsum dolor sit am.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="flex px-2  py-2 items-center rounded-sm hover:bg-emerald-500 hover:bg-opacity-25">
                    <div class="pr-2 max-w-[50px]">
                        <img class="object-cover  rounded-full" src="/pictures/Unggoy.jpg">
                    </div>
                    <div class="flex flex-col">
                        <div class="text-xl">
                            <h1>Admin</h1>
                        </div>
                        <div class="text-xs">
                            <p>Admin:Lorem ipsum dolor sit am.</p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!--message list end-->
            <div class="mx- flex flex-col w-fit drop-shadow-lg rounded-r">
                <div class="flex h-sm w-[40vw] align-center rounded-tr bg-green-700 bg-opacity-30 p-2 drop-shadow-2x">
                    <div class="pr-2 max-w-[60px]">
                        <img class="object-cover  rounded-full" src="/pictures/Unggoy.jpg">
                    </div>
                    <div class="flex flex-col">
                        <div class="text-xl">
                            <h1>Admin</h1>
                        </div>
                        <div class="text-xs">
                            <p>Active</p>
                        </div>
                    </div>
                </div>
                <hr class="border-zinc-800 border-opacity-30">
                <div class="flex flex-col px-4 w-[40vw] h-full">
                    <div class="flex flex-col h-full px-2 gap bg-gray-200 bg-opacity-20">
                        <div class="flex  justify-end gap-4 w-full py-2">
                            <div class="flex rounded-lg p-2 items-end w-fit bg-green-500 bg-opacity-30 ">Hi Anjo!</div>
                        </div>
                        <div class="flex flex-col w-full py-2">
                            <p class="text-sm">Admin</p>
                            <div class="flex rounded-lg p-2 items-end w-fit bg-green-400 bg-opacity-30">Hi, Sha!</div>
                        </div>
                    </div>

                </div>
                
                <div class="absolute bottom-0 mb-2 h-auto w-[40vw] align-center">
                    <hr class="border-gray-900">
                    <div class="flex items-center gap-x-2 justify-center w-full h-auto p-4">
                        <textarea class="w-full p-2 h-8 bg-green-700 bg-opacity-30 text-sm " name="message" placeholder="Aa" rows="2" cols="20"></textarea>
                        <i class='bx bxs-smile bx-xs' style='color:#033f07' ></i><i class='bx bxs-send bx-xs' style='color:#1b3122'  ></i>
                    </div>
                </div>

            </div>
        </div>
        <!--
                <div class="flex relative flex-col w-full bg-slate-400">
                        <div class="flex w-[40vw] align-center bg-green-700">
                            <div class="pr-2 max-w-[50px]">
                                <img class="object-cover  rounded-full" src="/pictures/Unggoy.jpg">
                            </div>
                            <div class="flex flex-col">
                                <div class="text-xl">
                                <h1>Admin</h1>
                                </div>
                                <div class="text-xs">
                                <p>Active</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="flex absolute inset-x-0 bottom-0 w-full align-center bg-green-700">
                            <div class="pr-2 max-w-[50px]">
                                <img class="object-cover  rounded-full" src="/pictures/Unggoy.jpg">
                            </div>
                            <div class="flex flex-col">
                                <div class="text-xl">
                                <h1>Admin</h1>
                                </div>
                                <div class="text-xs">
                                <p>Active</p>
                                </div>
                            </div>
                        </div>
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
                                        <i class='bx bx-smile bx-sm'  style='color:#1b3122 '></i><div class="flex items-center justify-center h-8 w-8 rounded-full bg-emerald-100"><i class='bx bxs-send bx-xs' style='color:#1b3122'  ></i></div>
                                     </div>
                                
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>

            </div>
    </div>

@endsection