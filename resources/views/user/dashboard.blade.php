@extends('../layouts.main')

@section('title', 'User Dashboard')

@section('content')
    <h1>User Dashboard</h1>
    <p>Welcome to the User dashboard</p>

    <a href="{{route('user.logout')}}" rel="noopener noreferrer">Logout</a>
@endsection