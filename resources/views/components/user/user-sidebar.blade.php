<div class="relative w-fit h-auto">
    <aside id="sidebar" class="fixed top-0 left-0 max-w-[270px] w-full bg-[#1e4d2b] h-full">
        <img src="{{ asset('img/TF.jpg')}}" alt="Logo" class="rounded-full my-10 w-28 h-28 mx-auto">
        <div class="flex flex-col justify-between">
            <div class="flex flex-col gap-2 ml-10">
                <x-sidebar-link route="user.dashboard" icon="bx bxs-home" label="Home" />
                <x-sidebar-link route="user.menu" icon="bx bxs-book" label="Menu" />
                <x-sidebar-link route="user.order" icon="bx bxs-cart-alt" label="Order" />
                <x-sidebar-link route="" icon="bx bxs-message" label="Messages" />
                <x-sidebar-link route="user.settings" icon="bx bxs-cog" label="Settings" />
                <x-sidebar-link route="user.logout" icon="bx bxs-exit" label="Logout" />
            </div>
        </div>
    </aside>
</div>