@extends('../layouts.main')

@section('title', 'User Registration')

@section('js')

@endsection

@section('content')
<div class="flex justify-center items-center h-screen w-full">
    <div class="bg-white flex justify-center overflow-hidden rounded-2xl shadow-md items-center max-h-3xl h-full max-w-md md:max-w-5xl w-full" x-data="{visitor: false}" x-cloak>
        <form action="{{ route('user.createAccount') }}" method="POST" class="flex justify-center items-center animate-Opac flex-col p-7 md:p-14 w-full">
            @csrf
            <p class="text-xl text-gray-800 font-bold font-nunito my-8 text-center">Create an account</p>
            <div class="flex flex-col md:flex-row w-full md:gap-2">
                <x-input-field label="First Name" type="text" name="firstname"/>
                <x-input-field label="Last Name" type="text" name="lastname" />
            </div>
            <x-input-field label="Username" type="text" name="username" />
            <div class="w-full flex flex-col">
                <x-dropdown-field label="Role" name="role" :options="
                    ['Students' => 'Students',    
                     'Faculty' => 'Faculty',
                     'Hospital Staff' => 'Hospital Staff',
                     'Visitor' => 'Visitor',]" />
            </div>
            <div id="visitor-parent" class="w-full justify-center" x-show="visitor">
                <x-input-field label="Until When?" type="date" name="until_when" />
            </div>
            <x-input-field label="Email" type="email" name="email" />
            <div class="flex w-full justify-center">
                <div class="w-full flex flex-col mb-4">
                    <label for="phone_number" class="text-xs mb-1">Mobile Number</label>
                    <input name="phone_number" x-mask="99999999999" class="p-2 rounded border text-xs border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400" value="{{ old('phone_number') }}">
                    @error('phone_number')
                        <p class="text-xs text-red-500 mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <x-input-field label="Password" type="password" name="password" />
            <x-input-field label="Confirm Password" type="password" name="password_confirmation" />
            <x-submit-button value="Register" />
            <div class="w-full flex flex-row items-center justify-center">
                <a href="{{route('user.login')}}" class="text-xs font-semibold text-green-600 ml-2">Already have an account?</a>
            </div>
        </form>
        <div class="min-w-sm w-full h-full hidden md:block bg-green-200">
            <img src="{{asset('pictures/user-register-1.svg')}}" alt="sign-in" class="w-full h-full animate-FadeInRight object-contain ">
        </div>
    </div>
</div>
@endsection