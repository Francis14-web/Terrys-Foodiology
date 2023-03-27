@extends('../layouts.main')

@section('title', 'Registration')
@section('js')
    <script src="{{ asset('javascript/dropdown.js') }}"></script>
@endsection


@section('content')
<div class="flex justify-center items-center h-screen w-full ">
    <div class="flex flex-row justify-center  overflow-hidden rounded-2xl shadow-xl items-center h-5/6 w-3/5">
        <form action="{{route('user.authenticate')}}" method="post" class="flex justify-center items-center animate-Opac flex-col max-w-xl w-full h-full">
            @csrf
            <p class="text-xl text-gray-800 font-bold font-nunito my-8 text-center">Create an account</p>
            
            <div class="flex w-8/12 justify-center">
                <div class="w-full flex flex-row mb-4 justify-between">
                    <div class="flex flex-col w-[48%]">
                        <label for="name" class="text-xs mb-1">First Name</label>
                        <input name="name" type="text" class=" p-2 rounded border text-xs border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                    <div class="flex flex-col w-[48%]">
                        <label for="name" class="text-xs mb-1">Last Name</label>
                        <input name="name" type="text" class=" p-2 rounded border text-xs border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400">
                    </div>

                </div>
            </div>  

            <div class="flex w-full justify-center">
            <div class="w-8/12 flex flex-col mb-4">
                    <label for="button" class="text-xs mb-1">Role</label>      
                    <button id="dropdownDefaultButton" label="Role" data-dropdown-toggle="dropdown" class="flex justify-between text-black border border-gray-300 font-small rounded text-sm px-2 py-2 my-2 text-center items-center focus:outline-none focus:ring-2 focus:ring-green-400" type="button">Select<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <div id="dropdown" class="z-10 hidden my-2 bg-white divide-y divide-gray-100 rounded-lg shadow">
                        <ul class="py-2 text-sm text-black-700" aria-labelledby="dropdownDefaultButton">
                            <li class="options">Student</li>
                            <li class="options">Faculty</li>
                            <li class="options">Hospital Staff</li>
                            <li class="options">Visitor</li>
                        </ul>
                    </div>
            </div>
            </div>
            <x-input-field label="Email" type="email" name="email"/>
            <x-input-field label="Password" type="password" name="password"/>
            <x-input-field label="Confirm Password" type="password" name="password"/>
            @error('email')
                <p class="text-xs text-red-500 my-5 text-center">{{$message}}</p>
            @enderror
            
            <x-submit-button value="Register"/>
            <div class="w-full flex flex-row items-center justify-center">
                <a href="{{route('user.login')}}" class="text-xs font-semibold text-green-600 ml-2">Already have an account?</a>
            </div>
            
        </form>
    <div class=" max-w-sm w-full h-full  backdrop:hidden sm:block bg-green-200">
        <img src="{{asset('pictures/user-register-1.svg')}}" alt="sign-in" class="w-full h-full animate-FadeInRight object-contain ">
    </div>
    </div>

    </div>
@endsection