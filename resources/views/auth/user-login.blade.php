@extends('../layouts.main')

@section('title', 'User Login')

@section('content')
    <div class="flex justify-center items-center h-screen w-full ">
        <div class="bg-white flex justify-center flex-row-reverse overflow-hidden rounded-2xl shadow-md items-center max-h-2xl h-full max-w-md md:max-w-5xl w-full">
            <form action="{{route('user.authenticate')}}" method="POST" class="flex justify-center items-center animate-Opac flex-col p-7 md:p-14 w-full">
                @csrf
                <p class="text-xl text-gray-800 font-bold font-nunito my-8 text-center">Hello, Welcome!</p>
                <x-input-field label="Email" type="email" name="email"/>
                <x-input-field label="Password" type="password" name="password"/>
                <div class="w-full flex items-center justify-between my-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label for="checkbox" class="text-xs ml-2">Remember me?</label>
                    </div>
                    <a href="{{route('user.forgotPassword')}}" class="text-xs font-semibold text-green-600">Forgot password?</a>
                </div>
                
                <x-submit-button value="Login"/>
                <div class="w-full flex flex-row items-center justify-center mt-6">
                    <p class="text-xs">Don't have an account?</p>
                    <a href="{{route('user.register')}}" class="text-xs font-semibold text-green-600 ml-2">Register</a>
                </div>
                
            </form>
            <div class="min-w-sm w-full h-full hidden md:block bg-green-200">
                <img src="{{asset('pictures/user-login-3.svg')}}" alt="sign-in" class="w-full h-full animate-FadeInTop object-contain ">
            </div>
        </div>
    </div>
@endsection