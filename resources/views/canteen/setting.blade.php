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
            <div class="mb-10 px-10 h-[90vh] mx-auto">
                @livewire('canteen-account-settings')
            </div>
        </div>
    </div
