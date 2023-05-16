@extends('../layouts.main')

@section('title', 'User Messages')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-user.user-sidebar />
        <div class="ml-[270px]" id="main-window">
            <x-heading title="Messages" />
            <div class="flex ml-28 mt-7">
            <div class="flex h-auto max-w- bg-red-700">
            <div class="message-list">
                <div class="profile-message-box">
                    <div>
                        <img class="rounded-full h-14 max-w-screen-md" src="{{asset('pictures/Unggoy.jpg')}}" alt="Logo">
                    </div>
                    <div>
                        12345
                    </div>
                </div>
                <div>
                    12345
                </div>
            </div>

            <div>
                ---- 1234567890
            </div>
        </div>
    </div>
        </div>
    </div>
    
@endsection
