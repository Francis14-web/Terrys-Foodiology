@extends('../layouts.main')

@section('title', 'User Login')
@section('css')
    <link rel="stylesheet" href="{{asset('css/user-login.css')}}"/>
@endsection

@section('content')
<div class="flex gap-10 flex-row-reverse justify-center items-center h-screen w-full">
    <form action="{{route('user.authenticate')}}" method="post" class="max-w-xs w-full">
        @csrf
        <p class="text-xl text-gray-800 font-bold font-nunito my-8">Sign in to your account</p>
        <x-input-field label="Email" type="email" name="email"/>
        <x-input-field label="Password" type="password" name="password"/>
        @error('email')
            <p class="text-xs text-red-500 my-5 text-center">{{$message}}</p>
        @enderror
        <div class="w-full flex justify-between items-center my-4">
            <div class="flex items-center">
                <input type="checkbox" name="checkbox" id="checkbox">
                <label for="checkbox" class="text-xs ml-2">Remember me?</label>
            </div>
            <a href="#" class="text-xs font-semibold text-green-600">Forgot password?</a>
        </div>
        
        <x-submit-button value="Login"/>
        <div class="w-full flex flex-row items-center justify-center mt-6">
            <p class="text-xs">Don't have an account?</p>
            <a href="#" class="text-xs font-semibold text-green-600 ml-2">Register</a>
        </div>
        
    </form>

    <div class="w-1/2 h-3/4">
      <img src="{{asset('pictures/user-login-1.svg')}}" alt="sign-in" class="w-full h-full object-contain">
    </div>
  </div>
  
@endsection