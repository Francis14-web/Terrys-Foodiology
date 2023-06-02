@extends('../layouts.main')

@section('title', 'Restricted Account')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <!-- <div class="relative w-screen h-screen">
        <x-user.user-sidebar />
        <div class="ml-[270px] h-full" id="main-window">
            <x-heading title="Messages" />           
        
            <div class="mt-4 flex justify-center sm:w-full gap-4">
                <div class="overflow-x-hidden sm:w-[22vw] w-full justify-center ">

                    <x-chat-message title="Canteen"/>                
                    <x-chat-message title="Admin" />                                     
                </div>
            
                <x-chat-box title="Admin"/>

            </div>
        </div>
    </div> -->

@endsection