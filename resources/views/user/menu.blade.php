@extends('../layouts.main')

@section('title', 'User Menu')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
    <script src="{{ asset('javascript/dropdown.js') }}"></script>
    <script src="{{ asset('javascript/orderdetails.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen min-h-screen">
        <x-user.user-sidebar />
        <x-user.mobile-navbar/>
        @livewire('point-of-sale-user')
    </div>
@endsection