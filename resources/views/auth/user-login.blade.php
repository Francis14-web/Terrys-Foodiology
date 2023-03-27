@extends('../layouts.main')

@section('title', 'User Login')


@section('content')
<div class="flex justify-center items-center h-screen w-full ">
    <div class="flex flex-row-reverse justify-center  overflow-hidden rounded-2xl shadow-xl items-center h-5/6 w-3/5">
        <form action="{{route('user.authenticate')}}" method="post" class="flex justify-center items-center animate-Opac flex-col max-w-xl w-full h-full">
            @csrf
            <p class="text-xl text-gray-800 font-bold font-nunito my-8 text-center">Hello, Welcome!</p>
            <x-input-field label="Email" type="email" name="email"/>
            <x-input-field label="Password" type="password" name="password"/>
            @error('email')
                <p class="text-xs text-red-500 my-5 text-center">{{$message}}</p>
            @enderror
            <div class="w-full flex justify-center items-center my-4">
                <div class="flex w-8/12 justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label for="checkbox" class="text-xs ml-2">Remember me?</label>
                    </div>
                    <a href="" class="text-xs font-semibold text-green-600">Forgot password?</a>
                </div>
            </div>
            
            <x-submit-button value="Login"/>
            <div class="w-full flex flex-row items-center justify-center mt-6">
                <p class="text-xs">Don't have an account?</p>
                <a href="{{route('user.register')}}" class="text-xs font-semibold text-green-600 ml-2">Register</a>
            </div>
            
        </form>
    <div class=" max-w-sm w-full h-full  backdrop:hidden sm:block bg-green-200">
        <img src="{{asset('pictures/user-login-3.svg')}}" alt="sign-in" class="w-full h-full animate-FadeIn object-contain ">
    </div>
    </div>

    </div>

@endsection