@props([
    'title' => 'title',
])


<div class="hidden md:flex px-10 pt-10  items-center gap-6">
    <div class="cursor-pointer">
        <i class='text-3xl bx bx-x' id="menu-button"></i>
    </div>
    <p class="text-2xl font-bold font-nunito text-gray-800">{{ $title }}</p>
</div>