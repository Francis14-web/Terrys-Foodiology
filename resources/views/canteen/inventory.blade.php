@extends('../layouts.main')

@section('title', 'Canteen Inventory')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-canteen.canteen-sidebar />
        <div class="ml-[270px]" id="main-window">
            <x-heading title="Inventory for {{ $formattedDate }}" />
            <div class="p-10">
                <livewire:canteen-inventory-table :date="$date"/>
            </div>
        </div>
    </div>
@endsection