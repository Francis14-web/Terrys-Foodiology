@extends('../layouts.main')

@section('title', 'User Messages')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
    <script src="{{ asset('javascript/dropdown.js') }}"></script>
@endsection
@section('content')

    <div class="relative w-screen h-screen">
        <x-user.mobile-navbar/>
        <x-user.user-sidebar />
        <div class="ml-[270px] h-full" id="main-window">
            <x-user.user-heading  title="Messages" />           
            <div class="mt-4 flex justify-center sm:w-full gap-4">
                <div class="overflow-x-hidden w-[600px] justify-center ">
                    <x-user-chat-message :data="$canteen"/>                
                    <x-user-chat-message :data="$admin" />                                     
                </div>
                {{-- <x-chat-box :target="$target"/> --}}
            </div>
        </div>

@endsection