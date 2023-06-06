@extends('../layouts.main')

@section('title', 'Promo Coupons')

@section('js')
    <script src="{{ asset('javascript/sidebar.js') }}"></script>
    <script src="{{ asset('javascript/dropdown.js') }}"></script>
@endsection

@section('content')
    <div class="relative w-screen h-screen">
        <x-user.mobile-navbar/>
        <x-user.user-sidebar/>
        <div class="sm:ml-[270px]" id="main-window">
            <x-user.user-heading  title="Promo Coupons" />
            <div class="p-5">
                <div class="grid grid-cols-4 auto-rows-fr p-5 my-3 shadow-md rounded bg-neutral-200">
                    <p>Promo Name</p>
                    <p>Promo Coupon</p>
                    <p>Promo Code</p>
                    <p>Time Limit</p>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection