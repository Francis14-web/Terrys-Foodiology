@extends('../layouts.main')

@section('title', 'User Verification')

@section('js')
    {{-- <script src="{{ asset('javascript/sidebar.js') }}"></script> --}}
@endsection

@section('content')
    <div class="relative w-screen h-screen bg-slate-100 justify-center items-center p-6">
        @if($verification)
            <div class="flex flex-col h-full max-w-md mx-auto justify-center gap-20">
                <img src="{{ asset('storage/'.$verification->id_path) }}" alt="ID" class="w-96 mx-auto"/>
                <p class="text-xl text-center">Hello <strong>{{ ucfirst(auth()->guard('user')->user()->firstname) . ' ' . auth()->guard('user')->user()->lastname }} </strong>, your account is currently being verified.</p>
                {{-- <p class="text-xl">Please wait for the admin to verify your account.</p> --}}
                <a href="{{ route('user.logout') }}" class="w-full text-center">Logout</a>
            </div>
        @else
            <div class="flex w-full h-full justify-center items-center">
                <div class="p-2 m-8 md:p-8 flex flex-col h-fit max-w-md mx-auto justify-center rounded-lg md:rounded-3xl bg-white">
                    <div class="flex justify-center w-auto h-max">
                        <img class="object-contain" src="/img/upload.png">
                    </div>
                    <p class="text-base md:text-lg pb-6">Hello <strong>{{ ucfirst(auth()->guard('user')->user()->firstname) . ' ' . auth()->guard('user')->user()->lastname }}</strong>! please upload a valid ID to verify your account.</p>
                    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" class="flex flex-col pb-8">
                        @csrf
                        <div class="mb-5">
                            <input type="file" name="image" id="image" class="filepond"/>
                        </div>
                        <div class="flex justify-between">
                            <a href="{{ route('user.logout') }}" class="border px-4 py-2 rounded-lg text-center hover:bg-slate-200 text-green-500">Logout</a>
                            <button type="submit" class="px-4 py-2 rounded-lg text-center bg-green-500 hover:bg-green-800 text-white">Verify Account</button>
                        </div>
                    </form>
                </div>
            </div>
        @endif
    </div>
@endsection