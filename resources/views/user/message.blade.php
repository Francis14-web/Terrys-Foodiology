@extends('../layouts.main')

@section('title', 'User Messages')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-user.user-sidebar />
        <div class="ml-[270px] h-full" id="main-window">
            <x-heading title="Messages" />           
        
            <div class="mt-4 flex justify-center sm:w-full gap-4">
                <!--message list start-->
                <div class="overflow-x-hidden sm:w-[22vw] w-full justify-center ">

                    <div class="flex w-auto px-4 py-2 mb-4 items-center rounded-lg hover:bg-green-500 hover:bg-opacity-25 bg-green-700 bg-opacity-30 cursor-pointer">
                        <div class="pr-2 max-w-[50px]">
                            <img class="object-cover  rounded-full" src="/pictures/Unggoy.jpg">
                        </div>
                        <div class="flex flex-col">
                            <div class="text-md font-medium">
                                <h1>Canteen</h1>
                            </div>
                            <div class="text-xs">
                                <p>Canteen: Lorem ipsum dolor sit am.</p>
                            </div>
                        </div>
                    </div>
                

                    <div class="flex px-2 py-2 items-center rounded-lg hover:bg-green-500 hover:bg-opacity-25 bg-green-700 bg-opacity-30 cursor-pointer">
                        <div class="pr-2 max-w-[50px]">
                            <img class="object-cover  rounded-full" src="/pictures/Unggoy.jpg">
                        </div>
                        <div class="flex flex-col ">
                            <div class="text-md font-medium">
                                <h1>Admin</h1>
                            </div>
                            <div class="text-xs">
                                <p>Admin: Lorem ipsum dolor sit am.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            <!--message list end-->
            <div class="sm:flex hidden h-[800px] flex-col rounded-lg ">
                <div class="flex h-sm w-[40vw] align-center rounded-t-lg  bg-green-500 bg-opacity-25 py-2 px-4 drop-shadow-2x">
                    <div class="pr-2 max-w-[60px]">
                        <img class="object-cover  rounded-full" src="/pictures/Unggoy.jpg">
                    </div>
                    <div class="flex flex-col justify-center">
                        <div class="text-md font-medium">
                            <h1>Admin</h1>
                        </div>
                        <div class="text-xs">
                            <p>Active</p>
                        </div>
                    </div>
                </div>
                <hr class="border-green-600">
                <div class="flex flex-col w-[40vw] h-full">
                    <div class="flex flex-col px-4 bg-green-700 bg-opacity-30 h-full ">
                        <div class="flex  justify-end gap-4 w-full py-4">
                            <div class="flex text-sm font-medium rounded-lg px-4 py-2 items-end w-fit bg-gray-100 ">Hi Anjo!</div>
                        </div>
                        <div class="flex flex-col w-full py-4">                            
                            <div class="flex text-sm font-medium rounded-md px-4 py-2  items-end w-fit bg-gray-100">Hi, Sha!</div>
                        </div>
                    </div>

                </div>
                
                <div class=" bg-green-700 bg-opacity-30 bottom-0 mb-8 h-auto w-[40vw] align-center rounded-b-lg">
                    <hr class="border-green-600">
                    <div class="flex items-center gap-x-2 justify-center w-full h-auto p-4">
                        <textarea class="w-full p-2 h-10 rounded-full items-center bg-white text-sm text-black" name="message" placeholder="Send a message" rows="2" cols="20"></textarea>
                        <i class='bx bxs-smile bx-xs text-green-500  p-2  cursor-pointer' ></i>
                        <i class='bx bxs-send bx-xs bg-green-500 p-2 rounded-full text-white cursor-pointer' ></i>
                    </div>
                </div>

            </div>


            </div>
        </div>


@endsection