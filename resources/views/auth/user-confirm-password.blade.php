@extends('../layouts.main')

@section('title', 'Forgot Password')


@section('content')
    <div class="flex justify-center items-center h-screen w-full ">
        <div class="bg-white flex justify-center overflow-hidden rounded-2xl shadow-md items-center max-h-2xl h-full max-w-md md:max-w-5xl w-full">
            <form action="#" method="POST" class="flex justify-center items-center animate-Opac flex-col p-7 md:p-14 w-full">
                @csrf
                <p class="text-xl text-gray-800 font-bold font-nunito my-8 text-center">Reset Password</p>           
                    <x-input-field label="New Password" type="password" name="new password"/>
                    <x-input-field label="Confirm Password" type="password" name="confirm password"/>                      
                <x-submit-button value="Save"/>
                
            </form>
            <div class="min-w-sm w-full h-full hidden md:block bg-green-200">
                <img src="{{asset('pictures/user-forgotpass.svg')}}" alt="sign-in" class="w-full h-full animate-FadeInRight object-contain ">
            </div>
        </div>
    </div>
@endsection