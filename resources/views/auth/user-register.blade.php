@extends('../layouts.main')

@section('title', 'Registration')
@section('js')
    <script src="{{ asset('javascript/dropdown.js') }}"></script>
@endsection


@section('content')
<div class="flex justify-center items-center h-screen w-full ">
    <div class="flex flex-row justify-center  overflow-hidden rounded-2xl shadow-xl items-center h-[90%] w-3/5">
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
                <select id="dropdown" class="flex justify-between text-black border border-gray-300 font-small rounded text-xs px-2 py-2 my-2 cursor-pointer items-center focus:outline-none focus:ring-2 focus:ring-green-400">
                    <option value="Students">Students</option>
                    <option value="Faculty">Faculty</option>
                    <option value="Hospital Staff">Hospital Staff</option>
                    <option value="Visitor">Visitor</option>
                </select>
            </div>
            </div>
            <div id="visitor-parent" class="hidden w-full justify-center">
                <div class="w-8/12 flex flex-col mb-4">
                    <label for="Until When?" class="text-xs mb-1">Until When?</label>
                    <input label="Until When?" type="text" name="text" class="p-2 rounded border text-xs border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400">
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
    <div class=" min-w-sm w-full h-full  backdrop:hidden sm:block bg-green-200">
        <img src="{{asset('pictures/user-register-1.svg')}}" alt="sign-in" class="w-full h-full animate-FadeInRight object-contain ">
    </div>
    </div>

    </div>
@endsection

