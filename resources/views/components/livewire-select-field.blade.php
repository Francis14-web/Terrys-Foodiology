@props([
    'type' => 'type',
    'label' => 'label',
    'model' => 'model',
    'categories' => 'categories'
])

<div>
    <div class="w-full flex flex-col mb-4">
        <label for="{{ $model }}" class="text-xs mb-1">{{$label}}</label>
        <select wire:model="{{ $model }}" model="{{ $model }}" id="{{ $model }}" class="p-2 rounded border text-xs border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400">
            @foreach($categories as $category)
                <option value="{{ $category }}">{{ $category }}</option>
            @endforeach
        </select>
    </div>
</div>