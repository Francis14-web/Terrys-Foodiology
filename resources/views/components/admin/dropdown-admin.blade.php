@props([
    'label' => 'label',
    'name' => 'name',
    'options' => [],
])

<div class="flex w-40 justify-center">
    <div class="w-full flex flex-col mb-4">
        <label for="{{ $name }}" class="text-xs mb-1">{{ $label }}</label>
        <select name="{{ $name }}" id="{{ $name }}" wire:model="{{ $name }}" class="p-2 rounded border text-xs border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400">
            @foreach ($options as $value => $label)
                <option value="{{ $value }}" {{ old($name) === $value ? 'selected' : '' }}>{{ $label }}</option>
            @endforeach
        </select>
    </div>
</div>