<div class="relative w-fit h-auto">
    <aside id="sidebar" class="fixed top-0 left-0 max-w-[270px] w-full bg-[#1e4d2b] h-full">
        <img src="{{ asset('img/TF.jpg')}}" alt="Logo" class="rounded-full my-10 w-28 h-28 mx-auto">
        <div class="flex flex-col justify-between">
            <div class="flex flex-col gap-2 ml-10">
                <a href="{{ route('user.dashboard') }}" class="flex items-center gap-6 py-2 px-3 text-sm w-full {{ request()->routeIs('user.dashboard') ? 'bg-white pl-8 rounded-l-full text-lime-600 font-extrabold' : 'text-white' }} hover:flex hover:items-center hover:bg-gray-900 hover:pl-8 hover:rounded-l-full hover:text-lime-600 hover:font-extrabold"><i class=' bx bxs-home'></i> Home</a>
                <a href="{{ route('user.menu') }}" class="flex items-center gap-6 py-2 px-3 text-sm w-full {{ request()->routeIs('user.menu') ? 'bg-white pl-8 rounded-l-full text-lime-600 font-extrabold' : 'text-white' }} hover:flex hover:items-center hover:bg-gray-900 hover:pl-8 hover:rounded-l-full hover:text-lime-600 hover:font-extrabold"><i class='bx bxs-book'></i> Menu</a>
                <a href="{{ route('user.order') }}" class="flex items-center gap-6 py-2 px-3 text-sm w-full {{ request()->routeIs('user.order') ? 'bg-white pl-8 rounded-l-full text-lime-600 font-extrabold' : 'text-white' }} hover:flex hover:items-center hover:bg-gray-900 hover:pl-8 hover:rounded-l-full hover:text-lime-600 hover:font-extrabold"><i class='bx bxs-cart-alt'></i> Order</a>
                <a href="#" class="flex items-center gap-6 py-2 px-3 text-sm w-full {{ request()->routeIs('') ? 'bg-white pl-8 rounded-l-full text-lime-600 font-extrabold' : 'text-white' }} hover:flex hover:items-center hover:bg-gray-900 hover:pl-8 hover:rounded-l-full hover:text-lime-600 hover:font-extrabold"><i class='bx bxs-message'></i> Messages</a>
                <a href="{{ route('user.settings') }}" class="flex items-center gap-6 py-2 px-3 text-sm w-full {{ request()->routeIs('user.settings') ? 'bg-white pl-8 rounded-l-full text-lime-600 font-extrabold' : 'text-white' }} hover:flex hover:items-center hover:bg-gray-900 hover:pl-8 hover:rounded-l-full hover:text-lime-600 hover:font-extrabold"><i class='bx bxs-cog'></i> Settings</a>
                <a href="{{ route('user.logout') }} " class="flex items-center gap-6 py-2 px-3 text-sm w-full {{ request()->routeIs('user.logout') ? 'bg-white pl-8 rounded-l-full text-lime-600 font-extrabold' : 'text-white' }} hover:flex hover:items-center hover:bg-gray-900 hover:pl-8 hover:rounded-l-full hover:text-lime-600 hover:font-extrabold"><i class='bx bxs-exit' ></i>Logout</a>
            </div>
        </div>
    </aside>
</div>