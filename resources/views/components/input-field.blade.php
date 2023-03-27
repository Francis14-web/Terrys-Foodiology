@props([
    'type' => 'type',
    'label' => 'label',
    'name' => 'name',
])

<div class="flex w-full justify-center">
    <div class="w-8/12 flex flex-col mb-4">
        <label for="{{ $name }}" class="text-xs mb-1">{{$label}}</label>
        <input name="{{ $name }}" type="{{ $type }}" class=" p-2 rounded border text-xs border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400" value="{{ old($name) }}">
    </div>
</div>