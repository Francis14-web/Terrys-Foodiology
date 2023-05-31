@extends('../layouts.main')

@section('content')

    <div class="flex m-10">
       <div class="flex flex-col justify-center items-center">
            <div class=" w-1/3 h-auto">
                <img alt="403:Your account access is over" src="pictures/403.png" class="w-full h-full object-contain">
            </div>
            @livewire('extend-access')
       </div>
    </div>
@endsection