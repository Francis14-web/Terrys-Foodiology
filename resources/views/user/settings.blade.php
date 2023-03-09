@extends('../layouts.main')

@section('title', 'User Settings')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-user.user-sidebar />
        <div class="ml-[270px] h-full" id="main-window">
            <x-heading title="Settings" />
            <div class="px-10 h-[90vh]">
                @livewire('tabs', ['tabs' => [
                    ['title' => 'Account Settings', 'view' => 'tabs.user.account', 'data' => null],
                    ['title' => 'Password', 'view' => 'tabs.user.password', 'data' => null],
                ]])
            </div>
            {{-- <div class="flex gap-20">
                <div class="flex flex-col mt-[30px] fixed h-full max-w-[250px] text-sm">
                    <h2 class="text-lg ml-[50px] font-semibold text-emerald-900">Account Settings</h2>
                    <a href="#" class=" ml-[100px] mt-[15px] pl-[30px] py-1 pr-[10px] rounded-l-3xl font-semibold text-green-900 hover:bg-lime-200 active:text-lime-200 active:bg-green-900"> Account</a>
                    <a href="#" class=" ml-[100px] mt-[5px] pl-[30px] py-1 pr-[10px] rounded-l-3xl font-semibold text-green-900  hover:bg-lime-200 active:text-lime-200 active:bg-green-900">Password</a>
                 </div>
                 <form>
                    <div class="flex gap-[20px] ml-[250px] p-[2em] w-full items-center mt-7" >
                    <div class="flex justify-center relative  bg-red-900 h-[200px] w-[200px] rounded-full">
                    <img class="bg-white object-cover h-full w-full rounded-full content-center" src="unggoy.jpg" alt="Profile">
                    <div class="absolute top-0 h-full w-full bg-white opacity-0 transition-all duration-150 ease-in-out cursor-pointer">
                        <i class="bx bx-edit"></i>
                    </div>
                    </div>
                    <div class="flex flex-col mt-1 gap-3">
                    <div class="flex flex-col">
                        <label for="">First Name:</label>
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="flex flex-col">
                        <label for="">Middle Name:</label>
                        <input type="text" placeholder="Middle Name">
                    </div>
                    <div class="flex flex-col">
                        <label for="">Last Name:</label>
                        <input type="text" placeholder="Last Name">
                    </div>
                    <div class="flex flex-col">
                        <label for="">Birthday:</label>
                        <input type="text">
                    </div>
                    <div class="flex justify-end mt-4 gap-4">
                        <button class="h-auto max-w-[80px] border-2 rounded-2xl border-green-900 py-1 pl-[6px] pr-[6px] text-sm" type="submit">Cancel</button>
                        <button class="h-auto max-w-[80px] border-2 rounded-2xl border-green-900 py-1 pl-[14px] pr-[14px] bg-emerald-900 text-white text-sm" type="submit">Save</button>
                    </div>
                </div>

                    </div>
                 </form>

            </div> --}}
        </div>
    </div>
@endsection

      