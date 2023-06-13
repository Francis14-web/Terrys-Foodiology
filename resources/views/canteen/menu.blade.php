@extends('../layouts.main')

@section('title', 'Canteen Menu')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-canteen.canteen-sidebar />
        <div class="ml-[270px]" id="main-window">
            <x-heading title="Inventory" />
            <div class="px-10">
                @livewire('tabs', ['tabs' => [
                    ['title' => 'Food List', 'view' => 'tabs.canteen.food-list', 'data' => null],
                    ['title' => 'Inventory (Per Day)', 'view' => 'tabs.canteen.logs', 'data' => null],
                    ['title' => 'Inventory (Filter Range)', 'view' => 'tabs.canteen.logs-filter', 'data' => null],
                ]])
            </div>
        </div>
    </div>
@endsection