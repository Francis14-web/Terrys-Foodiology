@extends('../layouts.main')

@section('title', 'User Menu')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-navbar />
        <x-user.user-sidebar />
        <div class="mt-14 md:ml-[270px]" id="main-window">
            <x-heading title="Menu" />
            @livewire('user-menu')
        </div>
    </div>
@endsection