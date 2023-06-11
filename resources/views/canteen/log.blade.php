@extends('../layouts.main')

@section('title', 'Canteen Log')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-canteen.canteen-sidebar />
        <div class="ml-[270px]" id="main-window">
            <x-heading title="Logs" />
            <div class="p-10">
                <livewire:canteen-logs-table :date="$date" :id="$id"/>
            </div>
        </div>
    </div>
@endsection