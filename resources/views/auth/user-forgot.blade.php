@extends('../layouts.main')

@section('title', 'Forgot Password')


@section('content')
<div class="flex justify-center items-center h-screen w-full ">
    <div class="flex flex-row justify-center  overflow-hidden rounded-2xl shadow-xl items-center h-[90%]  w-3/5">
        <form action="{{route('user.authenticate')}}" method="post" class="flex justify-center items-center animate-Opac flex-col max-w-xl w-full h-full">
            @csrf
            <p class="text-xl text-gray-800 font-bold font-nunito my-8 text-center">Forgot Password?</p>           
                <x-input-field label="Email" type="email" name="email"/>           
            <x-submit-button value="Submit"/>
            <div class="w-full flex flex-row items-center justify-center">
                <a href="{{route('user.login')}}" class="text-xs font-semibold text-green-600 ml-2">Back to Login</a>
            </div>
            
        </form>
    <div class=" min-w-sm w-full h-full  backdrop:hidden sm:block bg-green-200">
        <img src="{{asset('pictures/user-forgotpass.svg')}}" alt="sign-in" class="w-full h-full animate-FadeInRight object-contain ">
    </div>
    </div>

    </div>






@endsection