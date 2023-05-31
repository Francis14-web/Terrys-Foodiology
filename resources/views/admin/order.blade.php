@extends('../layouts.main')

@section('title', 'Admin Order')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
    {{-- <script type="module">
        Echo.channel('seller.{{ $user }}')
            .listen('CanteenOrderPageEvent', (event) => {
                // Handle the new order
                console.log('New order:', event);
            });
    </script> --}}
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-admin.admin-sidebar />
        <div class="ml-[270px]" id="main-window">
            <x-heading title="Order" />
            @livewire('admin-order')
        </div>
    </div>
@endsection