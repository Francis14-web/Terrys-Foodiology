@props([
    'route' => 'route',
    'icon' => 'icon',
    'label' => 'label',
])

<a href="{{ $route ? route($route) : '#' }}" class="relative transition-all flex items-center gap-6 py-2 px-3 text-sm w-full group {{ request()->routeIs($route) ? 'bg-white pl-8 rounded-l-full text-lime-600 font-extrabold' : 'text-white hover:bg-black/40 hover:pl-8 hover:rounded-l-full hover:text-lime-600 hover:font-extrabold' }}">
    <i class='{{ $icon }}'></i> 
    {{ $label }}
    @if (request()->routeIs($route))
        <img class="h-3 w-3 absolute -top-3 right-0 z-10 opacity-100" src="{{ asset('img/top-active.png') }}" alt="">
        <img class="h-3 w-3 absolute -bottom-3 right-0 z-10 opacity-100" src="{{ asset('img/bottom-active.png') }}" alt="">
    @endif
</a>
