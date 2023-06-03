@extends('../layouts.main')

@section('title', 'Admin Sales')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-admin.admin-sidebar />
        <div class="flex min-h-screen justify-between">
            <div class="ml-[270px] flex-1 grow" id="main-window">
                <x-heading title="Sales" />
                <div class="mx-auto flex w-full justify-center pb-8">
                    <livewire:canteen-sales-calendar 
                        :day-click-enabled="false"
                        :drag-and-drop-enabled="false"
                        before-calendar-view="calendar/header"/>
                    </div>
            </div>
            @livewire('statistics', ['statistics' => $statistics])
        </div>
    </div>
@endsection