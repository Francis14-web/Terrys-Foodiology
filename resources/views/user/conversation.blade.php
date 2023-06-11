@extends('../layouts.main')

@section('title', 'User Messages')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
    <script src="{{ asset('javascript/dropdown.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen">
        <x-user.user-sidebar />
        <x-user.mobile-navbar/>
        <div class="sm:ml-[270px] h-full" id="main-window">
            <x-user.user-heading title="Messages" />           
            <div class="m-4 flex sm:flex-row flex-col justify-center sm:w-full gap-4">
                <div class="sm:flex-col flex-row flex gap-4 overflow-x-hidden sm:w-[22vw] w-full">
                    <x-user-chat-message :data="$canteen"/>                
                    <x-user-chat-message :data="$admin" />                                     
                </div>
                <x-user-chat-box :target="$target->id" :data="$target"/>
            </div>
        </div>
@endsection