@props([
    'title' => 'title',
    'value' => 'value',
])

<div class="p-5 border rounded-lg flex flex-col items-center justify-center gap-y-1">
    <p class="text-4xl tracking-wider text-black/70">{{$value}}</pc>
    <p class="tracking-wide text-black/40">{{$title}}</p>
</div>