@extends('../layouts.main')

@section('title', 'Canteen Dashboard')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-canteen.canteen-sidebar />
        <div class="ml-80" id="main-window">
            <x-heading title="Dashboard" />
        </div>
    </div>
@endsection