<div class="w-full">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class=" flex flex-col gap-4 items-center">
        <div class="flex w-full justify-between items-center">
            <p class="font-semibold text-2xl text-green-600">Statistical Graph</p>                       
            <x-admin.dropdown-admin label="" name="activeGraph" :options="
                [0 => 'Weekly',    
                1 => 'Monthly',
                2 => 'Yearly',]"
            />
        </div>                     
    </div>
    <div class=" rounded-lg w-full">
        @foreach($graphs as $index => $gr)
            <div wire:key="{{ $index }}" 
                class="{{ $activeGraph == ($index) ? '' : 'hidden' }} relative h-full w-full">
                @include($gr['view'], ['data' => $gr['data']])
            </div>
        @endforeach
    </div>  
</div>