@extends('../layouts.main')

@section('title', 'User Order')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
    <script src="{{ asset('javascript/dropdown.js') }}"></script>
@endsection

@section('content')
    @if(request('success'))
        @php
            notyf()
                ->position('x', 'right')->position('y', 'top')
                ->dismissible(true)
                ->ripple(true)
                ->addSuccess('Payment successful!');
        @endphp
    @endif
    <div class="relative w-screen h-screen">
        <x-user.mobile-navbar/>
        <x-user.user-sidebar />
        <div class="sm:ml-[270px] h-full" id="main-window">
            <x-user.user-heading title="Orders" />
            <div class="px-10">
                @include('tabs.user.history-tab')
            </div>
        </div>
    </div>
@endsection