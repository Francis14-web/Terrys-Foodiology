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
                        @livewire('admin-account-settings')

                        

                        {{-- <div class="bg-gray-200 rounded-lg p-8 flex justify-between">
                            <p class="text-2xl font-semibold">Maintenance Mode</p>
                            <div class="w-96">
                                <x-livewire-input-field label="Password" type="password" model="lastname"/>
                                <x-admin.button-admin title="Authenticate"/>
                            </div>  
                        </div> --}}
                    </div>
                </div>
        </div>
    </div
