@props([
    'route' => 'route',
    'icon' => 'icon',
    'label' => 'label',
])

<a href="{{ $route ? route($route) : '#' }}" class=" relative transition-all flex justify-center items-center gap-6 py-2 px-3 text-sm w-full group {{ request()->routeIs($route) ? ' text-lime-600 font-extrabold' : 'text-gray-700 text-center font-semibold' }}">
    <!-- <i class='{{ $icon }}'></i>  -->
    {{ $label }}
    @if (request()->routeIs($route))
        <!-- <img class="h-3 w-3 absolute -top-3 right-0 z-10 opacity-100" src="{{ asset('img/top-active.png') }}" alt="">
        <img class="h-3 w-3 absolute -bottom-3 right-0 z-10 opacity-100" src="{{ asset('img/bottom-active.png') }}" alt=""> -->
    @endif
</a>