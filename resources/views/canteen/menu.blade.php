@extends('../layouts.main')

@section('title', 'Canteen Menu')

@section('content')

<div class="relative w-screen h-screen">
    <x-canteen.sidebar />
    <div class="ml-80">
        @livewire('canteen-menu')
    </div>
</div>


@endsection