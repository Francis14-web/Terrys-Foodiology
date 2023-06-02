@props([
    'type' => 'type',
    'label' => 'label',
    'model' => 'model',
    'value' => null,
])

<div>
    <div class="sm:w-full flex flex-col mb-4">
        <label for="{{ $model }}" class="text-sm mb-1">{{$label}}</label>
        <input wire:model="{{ $model }}" type="{{ $type }}" class=" p-2 rounded border text-xs border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400" value="{{ $value }}">
        @error($model) <span class="text-red-500 text-xs mt-2">{{ $message }}</span> @enderror
    </div>
</div>