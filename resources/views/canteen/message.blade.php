@extends('../layouts.main')

@section('title', 'Canteen Messages')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-canteen.canteen-sidebar />
        <div class="ml-[270px] h-full" id="main-window">
            <x-heading title="Messages" />           
            <div class="mt-4 flex justify-center sm:w-full gap-4">
                <div class="overflow-x-hidden w-[600px] justify-center ">
                    @foreach ($conversations as $conversation)
                        <x-chat-message :data="$conversation"/>  
                    @endforeach                                
                </div>
                {{-- <x-chat-box :target="$target"/> --}}
            </div>
        </div>
@endsection