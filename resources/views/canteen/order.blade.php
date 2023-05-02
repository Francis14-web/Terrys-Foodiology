@extends('../layouts.main')

@section('title', 'Canteen Order')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-canteen.canteen-sidebar />
        <div class="ml-[270px]" id="main-window">
            <x-heading title="Order" />
            @livewire('canteen-order')
        </div>
    </div>
@endsection