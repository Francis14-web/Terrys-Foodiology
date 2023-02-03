@extends('../layouts.main')

@section('title', 'Canteen Login')

@section('content')
    <form action="{{route('canteen.authenticate')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
@endsection