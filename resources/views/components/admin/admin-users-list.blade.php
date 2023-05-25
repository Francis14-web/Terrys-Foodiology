@props([
    'user' => null,
])

<div class="grid grid-cols-4 auto-rows-fr p-5 my-3 shadow-md rounded bg-white items-center">
    <p>{{$user->firstname . " " . $user->lastname}}</p>
    <p>{{$user->email}}</p>
    <p>{{$user->username}}</p>
    <div>
        <x-dropdown-field-orders :id="$user->id" name="status" :selected="$user->is_restricted" :options="[
            '1' => 'True',
            '0' => 'False',
        ]" />
        
    </div>
</div>