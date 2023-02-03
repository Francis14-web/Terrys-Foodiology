@extends('../layouts.main')

@section('title', 'Canteen Dashboard')

@section('content')
    <h1>Canteen Dashboard</h1>
    <p>Welcome to the Canteen dashboard</p>

    <a href="{{route('canteen.logout')}}" rel="noopener noreferrer">Logout</a>
@endsection