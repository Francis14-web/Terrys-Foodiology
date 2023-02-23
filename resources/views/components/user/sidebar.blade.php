<div class="relative w-fit h-auto">
    <aside id="sidebar" class="fixed top-0 left-0 max-w-xs w-full bg-[#1e4d2b] h-full">
        <img src="{{ asset('img/TF.jpg')}}" alt="Logo" class="rounded-full my-10 w-28 h-28 mx-auto">
        <div class="flex flex-col justify-between">
            <div class="flex flex-col gap-2 ml-10">
                <a href="{{ route('user.dashboard') }}" class="flex items-center gap-6 py-2 px-3 text-white text-sm  w-full "><i class='text-white bx bxs-home'></i> Home</a>
                <a href="{{ route('user.menu')}}" class="flex items-center gap-6 py-2 px-3 text-white text-sm  w-full "><i class='text-white bx bxs-book'></i> Menu</a>
                <a href="#" class="flex items-center gap-6 py-2 px-3 text-white text-sm  w-full "><i class='text-white bx bxs-cart-alt'></i> Order</a>
                <a href="#" class="flex items-center gap-6 py-2 px-3 text-white text-sm  w-full "><i class='text-white bx bxs-message'></i> Messages</a>
                <a href="{{ route('user.logout') }} " class="text-white text-sm flex items-center gap-6 py-2 px-3 w-full "><i class='bx bxs-exit' ></i>Logout</a>
            </div>
        </div>
    </aside>
</div>