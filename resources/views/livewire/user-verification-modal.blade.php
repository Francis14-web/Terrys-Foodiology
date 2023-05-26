<div>
    {{-- In work, do what you enjoy. --}}
    @if ($image)
        <div class="p-4 py-16 pb-12 border-2 text-center border-green-500 border-dashed">
            <img src="{{ asset('storage/' . $image->id_path ) }}" alt="User ID">
            <p class="mt-4">{{ $user->firstname . ' ' . $user->lastname }}</p>
        </div>
        <div class="flex justify-between items-center mt-5">
            <button class="px-4 py-2 border border-green-500 rounded-md text-green-500" wire:click="reject">
                Decline
            </button>
            <button class="px-4 py-2 border border-green-500 bg-green-500 rounded-md text-white" wire:click="approve">
                Approve
            </button>
        </div>
    @else
        <div class="p-4 py-16 border-2 text-center border-green-500 border-dashed">
            <p class="font-semibold text-green-500">This user haven't uploaded any ID yet.</p>
        </div>
    @endif
</div>
