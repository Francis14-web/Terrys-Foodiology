@extends('../layouts.main')

@section('title', 'Canteen Sales')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-canteen.canteen-sidebar />
        <div class="ml-[270px]" id="main-window">
            <x-heading title="Sales" />
            <div class=" mx-8 flex w-full justify-center pb-8">
                <livewire:canteen-sales-calendar 
                    :day-click-enabled="false"
                    :drag-and-drop-enabled="false"
                    before-calendar-view="calendar/header"/>
            </div>
        </div>
    </div>
@endsection