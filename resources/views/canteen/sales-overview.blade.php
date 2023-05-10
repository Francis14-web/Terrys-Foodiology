@extends('../layouts.main')

@section('title', 'Canteen Sales Overview')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-canteen.canteen-sidebar />
        <div class="ml-[270px]" id="main-window">
            <x-heading title="Sales for {{ $formattedDate }}" />
            <div class="p-10">
                <livewire:sales-table/>
            </div>
        </div>
    </div>
@endsection