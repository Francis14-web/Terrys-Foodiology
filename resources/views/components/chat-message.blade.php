@props([
    'data' => 'data', 
    'message' => 'message',
])

<a href="{{ route('canteen.conversation', $data->id) }}" class="flex w-auto px-4 py-2 mb-4 items-center rounded-lg bg-gray-200 cursor-pointer">
    <div class="pr-2 max-w-[50px]">
        <img class="object-cover  rounded-full" src="{{ asset('storage/' . $data->profile_image) }}">
    </div>
    <div class="flex flex-col">        
        <h1 class="text-md font-medium">{{$data->firstname . " " . $data->lastname}}</h1>
        <p class="text-xs">Lorem ipsum dolor sit am.</p>
    </div>
</a>