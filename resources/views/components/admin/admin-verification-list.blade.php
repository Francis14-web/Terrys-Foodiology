@props([
    'user' => null,
])

<div class="grid grid-cols-4 auto-rows-fr p-5 my-3 shadow-md rounded bg-white items-center cursor-pointer" onclick="Livewire.emit('openModal', 'user-verification-modal', {{ json_encode(['user' => $user->id]) }})">
    <p>{{$user->firstname . " " . $user->lastname}}</p>
    <p>{{$user->email}}</p>
    <p>{{$user->username}}</p>
    <p>{{\Carbon\Carbon::parse($user->created_at)->format('F j, Y')}}</p>
    {{-- <div>
        <x-dropdown-field-orders :id="$user->id" name="status" :selected="$user->is_restricted" :options="[
            '1' => 'True',
            '0' => 'False',
        ]" />
    </div> --}}
</div>