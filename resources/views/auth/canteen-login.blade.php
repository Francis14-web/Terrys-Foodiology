@extends('../layouts.main')

@section('title', 'Canteen Login')
@section('css')
    <link rel="stylesheet" href="{{asset('css/canteen-login.css')}}"/>
@endsection


@section('content')
<div>
    <div class="h-screen w-screen flex items-center justify-center ">
            <div class="max-w-lg w-full max-h-3xl h-full bg-white shadow-md rounded-2xl overflow-hidden p-10">
                <form action="{{route('canteen.authenticate')}}" method="post" class="w-full h-full flex flex-col justify-center">
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
            </div>
            
        </div>
        
        
    </div>
</div>

    
@endsection