@extends('../layouts.main')

@section('title', 'User Order')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-user.user-sidebar />
        <div class="ml-80" id="main-window">
            <x-heading title="Orders" />
            <div class="p-10">
                <livewire:order-table/>
            </div>
        </div>
    </div>
@endsection