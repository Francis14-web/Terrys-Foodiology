@extends('../layouts.main')

@section('title', 'System Setting')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-admin.admin-sidebar />
        <div class="ml-[270px] h-full" id="main-window">
            <x-heading title="System Setting" />  
                <div class="flex justify-center">
                    <div class="w-[1000px] m-8 flex justify-between flex-col ">
                        <!-- main content -->
                        <div class="bg-gray-200 rounded-lg p-8 flex justify-between">
                            <p class="text-2xl font-semibold">Account Setting</p>
                            <div class="w-96">
                                <x-livewire-input-field label="Username" type="text" model="username"/>
                                <x-livewire-input-field label="First name" type="text" model="firstname"/>
                                <x-livewire-input-field label="Last name" type="text" model="lastname"/>
                                <x-admin.button-admin title="Update"/>
                            </div>
                        </div>

                        <div class="bg-gray-200 rounded-lg p-8 flex justify-between my-6">
                            <p class="text-2xl font-semibold">Canteen's Business hour</p>
                            <div class="w-96">
                                <div class="w-full">
                                    <label for="Opening hour" class="text-sm my-2">Opening hour</label>
                                    <input type="time" name="time" class="flex w-full p-2 rounded border text-xs border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400"></input>
                                </div>
                            
                                <div class="w-full my-4">
                                    <label for="Opening hour" class="text-sm pb-2">Closing hour</label>
                                    <input type="time" name="time" class="flex w-full mb-4 p-2 rounded border text-xs border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400"></input>
                                </div>
                                <x-admin.button-admin title="Save"/>
                            </div>    
                            
                        </div>

                        <div class="bg-gray-200 rounded-lg p-8 flex justify-between">
                            <p class="text-2xl font-semibold">Maintenance Mode</p>
                            <div class="w-96">
                                <x-livewire-input-field label="Password" type="password" model="lastname"/>
                                <x-admin.button-admin title="Authenticate"/>
                            </div>  
                        </div>
                    </div>
                </div>
        </div>
    </div
