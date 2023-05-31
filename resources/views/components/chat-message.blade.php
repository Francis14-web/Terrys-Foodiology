@props([
    'title' => 'title', 
    'message' => 'message',
])

<div class="flex w-auto px-4 py-2 mb-4 items-center rounded-lg bg-gray-200 cursor-pointer">
    <div class="pr-2 max-w-[50px]">
        <img class="object-cover  rounded-full" src="/pictures/Unggoy.jpg">
    </div>
    <div class="flex flex-col">        
        <h1 class="text-md font-medium">{{$title}}</h1>
        <p class="text-xs">{{$title}}: Lorem ipsum dolor sit am.</p>
    </div>
</div>