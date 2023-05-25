@props([
    'name' => 'name',
    'options' => [],
    'id' => 'id',
    'selected' => 'selected',
])

<div class="w-fit">
    <div class="flex flex-col">
        <select name="{{ $name }}" class="p-2 rounded border text-xs border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400" wire:change="statusChange('{{ $id }}', $event.target.value)">
            @foreach ($options as $value => $label)
                <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }}>{{ $label }}</option>
            @endforeach
        </select>
    </div>
</div>
