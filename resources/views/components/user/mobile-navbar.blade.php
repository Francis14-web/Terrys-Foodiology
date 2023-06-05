<div class="hidden absolute left-0 z-30 h-screen bg-gray-50 opacity-70 w-full" id="top-nav">
</div>
    <div class="fixed shadow-md top-0 p-4 flex items-center h-auto w-full bg-white z-30 max-w-[762px] md:hidden">
       

        <div class="absolute top-5" id="burger">
            <i class='bx bx-menu bx-sm pl-4 text-xl text-green-600'  id="burger"></i>
        </div>
        <div class="hidden absolute pl-4 top-5 text-green-600" id="cancel">
            <i class='bx bx-x bx-sm' style="color:#16a34a"></i>
        </div>

        <div class="hidden absolute top-14 left-0 w-full flex flex-col h-full justify-between pb-5" id="mobile-bar">
            <div class="bg-white shadow-md items-center flex justify-center py-4">
                <div class="flex flex-col h-full gap-2">
                    <x-user.mobile-link route="user.dashboard" icon="bx bxs-home" label="Home" />
                    <x-user.mobile-link route="user.menu" icon="bx bxs-book" label="Menu" />
                    <x-user.mobile-link route="user.order" icon="bx bxs-cart-alt" label="Order" />
                    <x-user.mobile-link route="user.message" icon="bx bxs-message" label="Messages" />
                    <x-user.mobile-link route="user.settings" icon="bx bxs-cog" label="Settings" />
                    <x-user.mobile-link route="user.logout" icon="bx bxs-exit" label="Logout" />
                </div>
            </div>                
        </div> 

        <div class="flex justify-center items-center w-full">
            <img class="h-auto w-40 " src="{{ asset('img/white.jpg')}}"> 
        </div>         
    </div>
