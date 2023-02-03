@extends('../layouts.main')

@section('title', 'Admin Dashboard')

@section('content')
    <h1>Admin Dashboard</h1>
    <p>Welcome to the admin dashboard</p>

    <a href="{{route('admin.logout')}}" rel="noopener noreferrer">Logout</a>
@endsection