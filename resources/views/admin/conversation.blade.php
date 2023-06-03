@extends('../layouts.main')

@section('title', 'Admin Messages')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-admin.admin-sidebar />
        <div class="ml-[270px] h-full" id="main-window">
            <x-heading title="Messages" />           
            <div class="mt-4 flex justify-center sm:w-full gap-4">
                <div class="overflow-x-hidden sm:w-[22vw] w-full justify-center ">
                    @foreach ($conversations as $conversation)
                        <x-admin-chat-message :data="$conversation"/>  
                    @endforeach                                
                </div>
                <x-admin-chat-box :target="$target->id" :data="$target"/>
            </div>
        </div>
@endsection