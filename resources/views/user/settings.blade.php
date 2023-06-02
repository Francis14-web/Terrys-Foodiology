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
            <div class="mb-10 px-10 h-[90vh] mx-auto">
                @livewire('user-account-settings')
            </div>
        </div>
    </div>
@endsection

      