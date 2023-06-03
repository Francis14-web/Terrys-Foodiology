<div class="flex flex-col justify-center items-center md:px-4 md:p-10 h-screen">
    <div class="mt-4 h-auto w-2/5 md:h-auto md:w-1/3 ">
        <img src="/img/closed.png" class="h-full w-full object-contain">
    </div>
    <p class="text-center text-2xl md:text-4xl">Oops, we are closed!</p>
    <p class="text-center text-xl md:text-2xl">We are open from {{ \Carbon\Carbon::parse($opening_time)->format('h:i A') }} to {{ \Carbon\Carbon::parse($closing_time)->format('h:i A') }}</p>
</div>
