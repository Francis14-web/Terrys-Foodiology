@props([
    'title' => 'title',   
])



<div class="sm:flex hidden h-[800px] flex-col rounded-lg ">
    <div class="flex h-sm w-[40vw] align-center rounded-t-lg  bg-green-500 bg-opacity-25 py-2 px-4 drop-shadow-2x">
        <div class="pr-2 max-w-[60px]">
            <img class="object-cover  rounded-full" src="/pictures/Unggoy.jpg">
        </div>
        <div class="flex flex-col justify-center">
                        
            <h1 class="text-md font-medium">{{$title}}</h1>                                        
            <p class="text-xs">Active</p>
                        
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