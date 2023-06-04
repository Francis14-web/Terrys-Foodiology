@extends('../layouts.main')

@section('title', 'User Menu')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
    <script src="{{ asset('javascript/dropdown.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-user.mobile-navbar/>
        <x-user.user-sidebar />
        <div class="sm:ml-[270px]" id="main-window">
            <x-user.user-heading  title="Menu" />
            @livewire('user-menu')
        </div>
    </div>
@endsection