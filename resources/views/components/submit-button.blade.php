@props([
    'value' => 'value',
])

<div>
    <div class="w-full flex flex-col mb-4">
        <input type="submit" class="cursor-pointer w-full p-2 rounded bg-green-500 text-white text-xs hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400" id="btn-login" value="{{ $value }}">
    </div>
</div>