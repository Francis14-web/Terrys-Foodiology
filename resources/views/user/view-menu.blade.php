@extends('../layouts.main')

@section('title', 'User Menu')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <!-- <x-user.user-sidebar /> -->
        <div class="ml-[270px]" id="main-window">
            <x-heading title="Menu" />
            <div class="px-10">
                {{ Breadcrumbs::render('user.menu', $food->food_name) }}
                <div class="h-[80vh] flex justify-center items-center gap-12">
                    <img src="{{ asset('storage/' . $food->food_image ) }}" alt="Uploaded Images Preview" class=" w-72 h-96 object-cover rounded">
                    <div class="h-96 max-w-lg w-full flex flex-col justify-between py-5">
                        <div>
                            <h1 class=" text-3xl font-semibold">{{$food->food_name}}</h1>
                            <p class="my-4">
                                {{$food->food_description}}
                            </p>
                        </div>
                        <div class="w-full flex justify-between items-center">
                            <div>
                                <p class=" font-semibold text-sm text-black/50">Price</p>
                                <p class=" text-2xl font-bold">₱ {{$food->food_price}}</p>
                            </div>
                            <button onclick="Livewire.emit('openModal', 'add-user-order', {{ json_encode([$food->id]) }})" class="bg-green-500 text-white px-5 py-2 rounded-full text-sm">Order Now!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection