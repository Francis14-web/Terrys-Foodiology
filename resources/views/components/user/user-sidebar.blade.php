<div class="relative w-fit">
    <aside id="sidebar" class="hidden md:block fixed top-0 left-0 max-w-sidebar w-full bg-[#1e4d2b] h-screen">
        <div class="flex flex-col h-full justify-between pb-5">
            <div>
                <img src="{{ asset('img/TF.jpg')}}" alt="Logo" class="rounded-full my-10 w-28 h-28 mx-auto">
                <div class="flex flex-col h-full gap-2 ml-10">
                    @if(auth()->guard('user')->user()->is_restricted == 0)
                        <x-sidebar-link route="user.dashboard" icon="bx bxs-home" label="Home" />
                        <x-sidebar-link route="user.menu" icon="bx bxs-book" label="Menu" />
                        <x-sidebar-link route="user.order" icon="bx bxs-cart-alt" label="Order" />
                    @endif
                    {{-- <x-sidebar-link route="user.promo" icon="bx bxs-cart-alt" label="Promos Coupon" /> --}}
                    <x-sidebar-link route="user.message" icon="bx bxs-message" label="Messages" />
                </div>
            </div>
            <div class="ml-10">
                @if(auth()->guard('user')->user()->is_restricted == 0)
                    <x-sidebar-link route="user.settings" icon="bx bxs-cog" label="Settings" />
                @endif
                <x-sidebar-link route="user.logout" icon="bx bxs-exit" label="Logout" />
            </div>
        </div>
    </aside>
</div>