<div>
    <div class="flex flex-col w-[40vw] h-full">
        <div class="flex flex-col px-4 bg-green-700 bg-opacity-30 h-full ">
            @foreach ($messages as $text)
                @if ($text->sender_id == Auth::guard('admin')->user()->id)
                    {{-- Sender --}}
                    <div class="flex  justify-end gap-4 w-full py-4">
                        <div class="flex text-sm font-medium rounded-lg px-4 py-2 items-end w-fit bg-gray-100 ">{{$text->content}}</div>
                    </div>   
                @else
                    {{-- Receiver --}}
                    <div class="flex flex-col w-full py-4">                            
                        <div class="flex text-sm font-medium rounded-lg px-4 py-2 items-end w-fit bg-gray-100">{{$text->content}}</div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
                
    <div class=" bg-green-700 bg-opacity-30 bottom-0 mb-8 h-auto w-[40vw] align-center rounded-b-lg">
    <hr class="border-green-600">
        <div class="flex items-center gap-x-2 justify-center w-full h-auto p-4">
            <textarea wire:model="message" class="w-full p-2 h-10 rounded-full items-center bg-white text-sm text-black" name="message" placeholder="Send a message" rows="2" cols="20"></textarea>
            <button wire:click="send">
                <i class='bx bxs-send bx-xs bg-green-500 p-2 rounded-full text-white cursor-pointer' ></i>
            </button>
        </div>
    </div>
</div>