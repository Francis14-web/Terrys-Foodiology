@extends('../layouts.main')

@section('title', 'View Order')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-admin.admin-sidebar />
        <div class="sm:ml-[270px] h-full" id="main-window">
            <x-heading title="Orders" />
            <div class="px-10">
                <livewire:user-view-table :data="$data" />
            </div>
        </div>
    </div>
@endsection