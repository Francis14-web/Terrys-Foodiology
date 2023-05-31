@extends('../layouts.main')

@section('title', 'Account Setting')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-canteen.canteen-sidebar />
        <div class="ml-[270px] h-full" id="main-window">
            <x-heading title="Profile Setting" />  
            <div class="w-full flex flex-col justify-center items-center">
                <div class="flex sm:flex-row flex-col justify-between sm:w-[1000px] w-full m-4 p-8 bg-gray-200 rounded-lg">
                    <p class="text-2xl text-center mb-4 font-semibold">Account Settings</p>
                        <div class="flex sm:w-auto w-full flex-col px-4 gap-5">
                            <div class="flex flex-col sm:w-96">
                                <x-livewire-input-field label="Username" type="text" model="username"/>
                                <x-livewire-input-field label="First name" type="text" model="firstname"/>
                                <x-livewire-input-field label="Last name" type="text" model="lastname"/>
                                <x-livewire-input-field label="Birthday" type="date" model="birthday"/>
                                <div class="flex justify-end gap-4">
                                    <x-admin.button-admin title="Update"/>
                                </div>
                            </div>  
                        </div>
                </div>

                <div class="flex sm:flex-row flex-col justify-between sm:w-[1000px] w-full m-4 p-8 bg-gray-200 rounded-lg">
                    <p class="text-2xl text-center mb-4 font-semibold">Change Password</p>
                        <div class="flex sm:w-auto w-full flex-col px-4 gap-5">
                            <div class="flex flex-col sm:w-96">
                                <x-livewire-input-field label="Current Password" type="password" model="username"/>
                                <x-livewire-input-field label="New Password" type="password" model="firstname"/>
                                <x-livewire-input-field label="Confirm Password" type="password" model="firstname"/>
                                <x-admin.button-admin title="Save"/>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div
