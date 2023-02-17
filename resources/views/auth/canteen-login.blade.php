@extends('../layouts.main')

@section('title', 'Canteen Login')
@section('css')
    <link rel="stylesheet" href="{{asset('css/canteen-login.css')}}"/>
@endsection


@section('content')
<div>
    <div class="h-screen w-screen flex items-center justify-center overflow-hidden ">
        <div class="flex justify-center shadow-lg">
            <div class="bg-green-500 max-h-[500px] h-full flex flex-col justify-end">
                <img src="{{asset('pictures/user-login.png')}}" alt="sign-in" class=" object-cover">
            </div>
            <div class="max-w-sm w-full flex items-center bg-white px-6 ">
                <form action="{{route('canteen.authenticate')}}" method="post" class="w-full">
                    @csrf
                    <p class="text-2xl font-bold font-nunito mb-8 text-gray-700">Sign in to your account</p>
                    <x-input-field label="Email" type="email" name="email"/>
                    <x-input-field label="Password" type="password" name="password"/>
                    <div class="w-full flex flex-row justify-between items-center mb-4">
                        <div class="flex items-center">
                            <input type="checkbox" name="checkbox" id="checkbox" class="mr-2 rounded border-gray-300">
                            <label for="checkbox" class="text-xs">Remember me?</label>
                        </div>
                        <a href="#" id="forgot-pass" class="text-xs text-green-500 hover:underline">Forgot password?</a>
                    </div>
                    @error('email')
                        <p class="text-xs text-red-500 my-5">{{$message}}</p>
                    @enderror
                    <x-submit-button value="Login"/>
                </form>
            </div>
            
        </div>
        
        
    </div>
</div>

    
@endsection