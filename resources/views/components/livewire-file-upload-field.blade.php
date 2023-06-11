@props([
    'type' => 'type',
    'label' => 'label',
    'model' => 'model',
])

<div>
    <div class="w-full flex flex-col mb-4">
        <label for="{{ $model }}" class="text-xs mb-1">{{$label}}</label>
        <input wire:model="{{ $model }}" type="{{ $type }}" class=" p-2 rounded border text-xs border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400" value="{{ old($model) }}">
        @error($model) <span class="text-red-500 text-xs mt-2">{{ $message }}</span> @enderror
    </div>
</div>