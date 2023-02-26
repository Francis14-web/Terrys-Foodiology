@extends('../layouts.main')

@section('title', 'User Order')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-user.user-sidebar />
        <div class="ml-[270px] h-full" id="main-window">
            <x-heading title="Orders" />
            @if ($order)
                <div class="p-10">
                    <livewire:order-table/>
                </div>
                @livewire('payment-bar', ['order' => $order])
            @else
                <div class="h-5/6 flex justify-center items-center flex-col gap-10">
                    <div>
                        <img class=" max-w-sm opacity-50" src="{{ asset('img/empty2.png') }}" alt="No Food">
                        <p class="text-center text-gray-500">
                            No order found
                        </p>
                    </div>
                    <a href="{{ route('user.menu') }}" class="mt-5 bg-green-500 text-white px-5 py-2 rounded-full">Order Now</a>
                </div>
            @endif
        </div>
    </div>
@endsection