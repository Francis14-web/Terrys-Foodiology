@extends('../layouts.main')

@section('title', 'Canteen Menu')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-canteen.sidebar />
        <div class="ml-80" id="main-window">
            <x-heading title="Menu" />
            @livewire('canteen-menu')
        </div>
    </div>
@endsection