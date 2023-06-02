@extends('../layouts.main')

@section('title', 'Canteen Menu')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen min-h-screen">
        <x-canteen.canteen-sidebar />
        @livewire('point-of-sale')
    </div>
@endsection