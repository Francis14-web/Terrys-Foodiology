@extends('../layouts.main')

@section('title', 'View  Order')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
    <script src="{{ asset('javascript/dropdown.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-user.mobile-navbar/>
        <x-user.user-sidebar />
        <div class="sm:ml-[270px] h-full" id="main-window">
            
                <x-user.user-heading title="Orders" />
                <a href="{{route('user.order')}}" class="sm:hidden absolute top-[85px] left-0" id="burger">
                    <i class='bx bx-left-arrow-alt bx-sm pl-2 text-xl text-green-600'></i>
                </a>
            
            <div class="px-10">               
                <livewire:user-view-table :data="$data" />
            </div>
        </div>
    </div>
@endsection