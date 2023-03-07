@props([
    'label' => 'label',
    'href' => 'href',
])

<a href="{{ $href }}" class="text-green-500 underline">
    {{ $label }}
</a>