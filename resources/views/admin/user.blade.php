@extends('../layouts.main')

@section('title', 'Admin | User Management')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-admin.admin-sidebar />
        <div class="ml-[270px]" id="main-window">
            <x-heading title="User Management" />
            <div class="px-10 mt-10">
                @livewire('tabs', ['tabs' => [
                    ['title' => 'User Verification', 'view' => 'tabs.admin.user-verification', 'data' => null],
                    ['title' => 'User Restriction', 'view' => 'tabs.admin.user-restriction', 'data' => null],
                ]])
            </div>
            
        </div>
    </div>
@endsection