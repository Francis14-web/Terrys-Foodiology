@extends('../layouts.main')

@section('title', 'User Verification')

@section('js')
    {{-- <script src="{{ asset('javascript/sidebar.js') }}"></script> --}}
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        @if($verification)
            <div class="flex flex-col h-full max-w-md mx-auto justify-center gap-20 ">
                <img src="{{ asset('storage/'.$verification->id_path) }}" alt="ID" class="w-96 mx-auto"/>
                <p class="text-xl text-center">Hello <strong>{{ ucfirst(auth()->guard('user')->user()->firstname) . ' ' . auth()->guard('user')->user()->lastname }} </strong>, your account is currently being verified.</p>
                {{-- <p class="text-xl">Please wait for the admin to verify your account.</p> --}}
                <a href="{{ route('user.logout') }}" class="w-full text-center">Logout</a>
            </div>
        @else
            <div class="flex flex-col h-full max-w-md mx-auto justify-center gap-20">
                <p class="text-xl">Hello <strong>{{ ucfirst(auth()->guard('user')->user()->firstname) . ' ' . auth()->guard('user')->user()->lastname }} </strong>, please upload a valid ID to verify your account.</p>
                <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-10">
                    @csrf
                    <input type="file" name="image" id="image" class="filepond"/>
                    <button type="submit" class="w-full bg-green-500 rounded-md hover:bg-green-800 text-white py-3">Verify Account</button>
                </form>
                <a href="{{ route('user.logout') }}" class="w-full text-center">Logout</a>
            </div>
        @endif

    </div>
@endsection