<div >
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="flex flex-col gap-4 items-center">
        <h1 class="text-2xl font-semibold">Sales</h1>
        <div class="flex w-full justify-between">
            <p class="font-semibold text-2xl text-green-600">Statistics</p>                       
            <x-admin.dropdown-admin label="" name="activeGraph" :options="
                [0 => 'Weekly',    
                 1 => 'Monthly',
                 2 => 'Yearly',]"
            />
        </div>                     
    </div>
    <div class="py-5 rounded-lg">
        @foreach($graphs as $index => $gr)
            <div wire:key="{{ $index }}" 
                class="{{ $activeGraph == ($index) ? '' : 'hidden' }} relative h-full">
                @include($gr['view'], ['data' => $gr['data']])
            </div>
        @endforeach
    </div>  
</div>