<div>
    <div class="flex items-center gap-2">
        <x-input-field label="Start Date" type="date" name="start_date" />
        <x-input-field label="End Date" type="date" name="end_date" />
        <button class="bg-green-500 text-white rounded p-2 py-1" wire:click="getDateRange">Filter</button>
        <button class="bg-black/20 text-black/70 rounded p-2 py-1" wire:click="resetDateRange">Clear</button>
    </div>

    @foreach($dates as $date)
        <div class="my-8 bg-white p-4 shadow rounded-md">
            <p class="text-xl mb-4">{{ \Carbon\Carbon::parse($date)->format('F j, Y') }}</p>
            <livewire:inventory-range-filter-table :date="$date" />
        </div>
    @endforeach
</div>