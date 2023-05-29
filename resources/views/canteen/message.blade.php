@extends('../layouts.main')

@section('title', 'Canteen Message')


@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-canteen.canteen-sidebar />
        <div class="ml-[270px] h-full" id="main-window">
            <x-heading title="Messages" />           
        
            <div class="mt-4 flex justify-center sm:w-full gap-4">
                <div class="overflow-x-hidden sm:w-[22vw] w-full justify-center ">

                    <x-chat-message title="Francis Edian M. Panaligan"/>                
                    <x-chat-message title="Cielo May Enriquez" />
                    <x-chat-message title="Jerico M. Victoria"/>                
                    <x-chat-message title="Ramino Jake H. Santos" />                                       
                </div>
            
                <x-chat-box title="Francis Edian M. Panaligan"/>

            </div>
        </div>
@endsection