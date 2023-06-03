@extends('../layouts.main')

@section('title', 'Restricted Account')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    
    <div class="relative w-screen h-screen overflow-y-hidden ">
        <x-user.user-sidebar />
        <div class="ml-[270px] h-full" id="main-window">
            <x-heading title="Restricted Account" />           
        
            <div class="flex flex-col items-center w-full">
                <img src="/img/account-res.jpg" class="h-[700px] w-[700px]">
                <p class="text-red-500 font-bold text-5xl">Account Restricted</p>
                <p class="text-gray-600 font-medium text-xl">Kindly Message the Admin for more information</p>
            </div>
        </div>
    </div>
    


@endsection