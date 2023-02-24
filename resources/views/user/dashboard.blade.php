@extends('../layouts.main')

@section('title', 'User Home')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-user.sidebar />
        <div class="ml-80" id="main-window">
            <x-heading title="Home" />
        </div>
    </div>
@endsection