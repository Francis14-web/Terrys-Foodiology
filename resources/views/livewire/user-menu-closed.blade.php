<div class="md:px-4 md:p-10">
    <p class="text-center text-4xl">Oops, we are closed!</p>
    <p class="text-center text-2xl">We are open from {{ \Carbon\Carbon::parse($opening_time)->format('h:i A') }} to {{ \Carbon\Carbon::parse($closing_time)->format('h:i A') }}</p>
</div>
