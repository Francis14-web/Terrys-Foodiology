@extends('../layouts.main')

@section('title', 'Admin Login')
@section('css')
    <link rel="stylesheet" href="{{asset('css/user-login.css')}}"/>
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

        <div id="register-container">
            <p>Don't have an account?</p>
            <a href="#" id="register">Register</a>
        </div>

    </form>


    <div>
        <div class="right-side">

        </div>
    </div>
</div>
@endsection

<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link rel="stylesheet" href="/css/admin.css">
    </head>

    <body>
        <div class="container">
            <div class="wrapper">
                <div class="card">
                    <img src="/img/canteen-two-logo.png" class="logo">
                    <p id="adminTitle">
                        Admin
                    </p>
                    <form id="admin-login" method="post">
                        <input type="text" id="adminlog" name="username" placeholder="Username" required>
                        <input type="password" id="passwordlog" name="password" placeholder="Password" required>

                        <input type="submit" id="adminStart">
                    </form>

                    <div class="bottomFunction">
                        <div id="checkBox">
                            <input type="checkbox" class="checkBtn" name="rememberMe">
                            <label for="rememberMe" id="rememberMe">Remember Me?</label>
                        </div>
                        
                        <a href="#" class="forgotPass">Forgot Password</a>
                    </div>

                    <a href="#" class="createAcc">Create an Account</a>
                    

                </div>
            </div>
        </div>
        <script src="/javascript/admin.js"></script>
    </body>
</html> -->

<!-- @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing:border-box;
    font-family: 'Poppins', sans-serif;
}

.container{
    display: flex;
    justify-content: center;
    width: 100%;
    align-content: center;
    background-image: linear-gradient(50deg, #3a482f, #576d5c, #75948d, #94bdc1);
}
.wrapper{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 70%;
}

.card{
    display: flex;
    flex-direction: column;
    align-content: center;
    align-items: center;
    background-color: #ffffff;
    height: 80%;
    width: 45%;
    box-shadow:  1px 2px 25px 3px rgb(115, 114, 114);
    border-radius: 5px;
}

#admin-login{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
}
.logo{
    margin: 1em 0 2em 0;
    height: 150px;
    width: 150px;
}

#adminTitle{
    font-size: 30px;
    font-weight: 900;
    color:#002d00;
    text-transform: uppercase;
    
}

#adminlog, #passwordlog{ 
    border: 0;
    box-shadow: 0px 1px 3px rgb(138, 137, 137);
    border-radius: 15px;
    padding: 10px;
    margin: 7px;
    width: 50%;
}

#adminStart{
    border: 0;
    border-radius: 15px;
    padding: 10px;
    margin: 25px 10px 5px 10px;
    width: 50%;
    background-image: linear-gradient(54deg, #0d5446, #336846, #4e7c45, #679143);
    color: #ffffff;
    cursor: pointer;
}

.bottomFunction{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    font-size: 10px;
    width: 45%;
    font-weight: 600;
    margin: 3px;
}

#checkBox{
    display: flex;
    align-content: center;
}
.checkBtn{
    margin-right: 2px;
}
#rememberMe{
    color: rgba(9, 162, 9, 0.939);
}
.forgotPass, .createAcc{
    text-decoration: none;
}

.createAcc{
    color:rgba(9, 162, 9, 0.939);
    font-size: 14px;
    padding-top: 2em;
    font-weight: 600;
} -->
