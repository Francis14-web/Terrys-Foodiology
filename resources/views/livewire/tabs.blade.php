<div class="py-5 h-full">
    <div class="flex gap-3">
        @foreach($tabs as $index => $tab)
            <button wire:click="setActiveTab({{ $index + 1 }})"
                class="rounded-full text-xs font-medium  leading-normal px-5 py-2 border-2 {{ $activeTab === ($index + 1) ? 'border-2  border-emerald-900' : 'border-transparent hover:bg-emerald-600 hover:text-white  hover: hover:border-emerald-800' }}">
                {{ $tab['title'] }}
            </button>
        @endforeach
    </div>
    <div class="h-full">
        @foreach($tabs as $index => $tab)
            <div wire:key="{{ $index }}" 
                class="{{ $activeTab === ($index) ? '' : 'hidden' }} relative h-full">
                @include($tab['view'], ['data' => $tab['data']])
            </div>
        @endforeach
    </div>
</div>
