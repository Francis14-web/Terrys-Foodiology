@extends('../layouts.main')

@section('title', 'Canteen Login')
@section('css')
    <link rel="stylesheet" href="{{asset('css/canteen-login.css')}}"/>
@endsection


@section('content')
<div class="h-screen w-full flex items-center justify-center ">
    <div class="bg-white flex justify-center flex-row-reverse overflow-hidden rounded-2xl shadow-md items-center max-h-2xl h-full max-w-md md:max-w-5xl w-full">
        <form action="{{route('canteen.authenticate')}}" method="post" class="w-full h-full p-7 flex flex-col justify-center animate-Opac">
            @csrf
            <img src="{{ asset('img/TF.jpg')}}" alt="Logo" class="rounded-full w-28 h-28 mx-auto">
            <p class="text-2xl text-center font-bold font-nunito mb-8 text-gray-700">Sign in to your account</p>
            <x-input-field label="Email" type="email" name="email"/>
            <x-input-field label="Password" type="password" name="password"/>
            <div class="w-full flex justify-center items-center my-4">
                <div class="flex justify-between w-full">
                    <div class="flex items-center gap-x-1">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label for="checkbox" class="text-xs ml-2">Remember me?</label>
                    </div>
                    <a href="{{route('user.forgotPassword')}}" class="text-xs font-semibold text-green-600">Forgot password?</a>
                </div>
            </div>
                <x-submit-button value="Login"/>
            </form>

            <div class="min-w-sm w-full h-full hidden md:block bg-green-200">
                <img src="{{asset('img/moblogin.svg')}}" alt="sign-in" class="w-full h-full animate-FadeInTop object-contain ">
            </div>
    </div>
</div>

    
@endsection