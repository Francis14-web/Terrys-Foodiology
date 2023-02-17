@extends('../layouts.main')

@section('title', 'Canteen Login')
@section('css')
    <link rel="stylesheet" href="{{asset('css/canteen-login.css')}}"/>
@endsection


@section('content')
<div id="wrapper">
    
    <form action="{{route('canteen.authenticate')}}" method="post" id="form-container">
        @csrf
        <p id="sign-in">Sign into your account</p>
        <div class="form-group">
            <label for="email" class="name">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="password" class="name">Password</label>
            <input type="password" name="password" id="password" class="form-control" >
        </div>
        <div id="before-login">
            <div>
                <input type="checkbox" name="checkbox" id="checkbox">
                <label for="checkbox" id="checkbox-name">Remember me?</label>
            </div>
            <div>
                <a href="#" id="forgot-pass">Forgot password?</a>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="btn-login">Login</button>
        </div>

        

    </form>


    <div>
        <div class="right-side">
            <img src="{{asset('pictures/user-login.png')}}" alt="sign-in">
        </div>
    </div>
</div>
    
@endsection