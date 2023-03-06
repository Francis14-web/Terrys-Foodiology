<div>
    @if ($data)
        <div class="py-10 pt-6">
            <livewire:order-table/>
        </div>
        @livewire('payment-bar', ['order' => $data])
    @else
        <div class="h-5/6 flex justify-center items-center flex-col gap-10">
            <div>
                <img class=" max-w-sm opacity-50" src="{{ asset('img/empty2.png') }}" alt="No Food">
                <p class="text-center text-gray-500">
                    No data found
                </p>
            </div>
            <a href="{{ route('user.menu') }}" class="mt-5 bg-green-500 text-white px-5 py-2 rounded-full">Order Now</a>
        </div>
    @endif
</div>