<div class="p-10">
    <div class="flex justify-between items-center text-neutral-500 ">
        <p>
            Total Users: 
            {{ $userCount }}
        </p>
        <div>
            <input type="text" wire:model="search" class="p-3 rounded-full" placeholder="Search...">
        </div>
    </div>
    <div class="grid grid-cols-4 auto-rows-fr p-5 my-3 shadow-md rounded bg-neutral-200">
        <p>Customer Name</p>
        <p>Email</p>
        <p>Username</p>
        <p>Restricted</p>
    </div>
    @forelse ($users as $user)
        {{-- <x-canteen.canteen-order-list-card :order="$order"/> --}}
        <x-admin.admin-users-list :user="$user"/>
    @empty
        No Users found
    @endforelse
    <div class="my-10 mx-auto flex justify-end">
        {{ $users->links() }}
    </div>
</div>
