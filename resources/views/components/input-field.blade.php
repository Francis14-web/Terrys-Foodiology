@props([
    'type' => 'type',
    'label' => 'label',
    'name' => 'name',
    'class' => null
])

<div class="flex w-full justify-center">
    <div class="w-full flex flex-col mb-4 {{ $class }}">
        <label for="{{ $name }}" class="text-xs mb-1">{{ $label }}</label>
        <input name="{{ $name }}" wire:model="{{ $name }}" type="{{ $type }}" class="p-2 rounded border text-xs border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400" value="{{ old($name) }}">
        @error($name)
            <p class="text-xs text-red-500 mt-2">{{$message}}</p>
        @enderror
    </div>
</div>
