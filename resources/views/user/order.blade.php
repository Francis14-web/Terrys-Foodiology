@extends('../layouts.main')

@section('title', 'User Order')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    @if(request('success'))
        @php
            notyf()
                ->position('x', 'right')->position('y', 'top')
                ->dismissible(true)
                ->ripple(true)
                ->addSuccess('Payment successful!');
        @endphp
    @endif
    <div class="relative w-screen h-screen">
        <x-user.user-sidebar />
        <div class="ml-[270px] h-full" id="main-window">
            <x-heading title="Orders" />
            <div class="px-10">
                @livewire('tabs', ['tabs' => [
                    ['title' => 'Cart', 'view' => 'tabs.user.cart-tab', 'data' => $order],
                    ['title' => 'Order History', 'view' => 'tabs.user.history-tab', 'data' => null],
                ]])
            </div>
        </div>
    </div>
@endsection