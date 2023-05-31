@props([
    'title' => 'title',
])

<div class="w-full flex justify-end gap-4">
    <button class="text-white rounded-lg bg-green-500 h-10 w-auto px-8 font-medium">
        {{$title}}
    </button>
</div>