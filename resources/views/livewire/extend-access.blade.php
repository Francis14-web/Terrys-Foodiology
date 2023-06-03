<div class="flex flex-col gap-2">
    <p class=" text-base md:text-lg lg:text-2xl text-emerald-950 font-semibold">Sorry! Your account access is over.</p>
    <p class="text-left text-sm mb-10">Would you like to extend your access?</p>
        <x-dropdown-field label="" name="extend_days" :options="[
            '1 day' => '1 day',
            '2 days' => '2 days',
            '3 days' => '3 days',
            '4 days' => '4 days',
            '5 days' => '5 days',
            '6 days' => '6 days',
            '1 week' => '1 week',
            '10 days' => '10 days',
            '2 weeks' => '2 weeks',
        ]" />
        <div class="flex items-center justify-between">
            <a class="w-fit border border-green-500 hover:bg-green-500 self-end text-sm text-green-500 hover:text-white rounded-md px-4 py-2" href="{{ route('user.logout') }}">Logout</a>
            <button class="w-fit bg-green-500 hover:bg-green-900 self-end text-sm text-white rounded-md px-4 py-2" wire:click="update">
                Extend Access
            </button>

        </div>
</div>