@extends('layouts.app')

@section('content')
<div class="home">
    <nav>
        <div class="logo">
            <a href="/"><img src="" alt="LOGO"></a>
        </div>
        
        <div class="sign-in">
            <ul>
                <!-- <li class="sign-in">Sign In</li>
                <li class="sign-in">Sign In</li> -->
                <li><a href="">Sign In</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="heading sign-in-card sign-up-card">
        <h1>Register</h1>
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="card2">
                <p>Name</p>
                <input type="text" name="name" id="" placeholder="Your name"> 
                
                <p>Email</p>
                <input type="text" name="email" id="" placeholder="jhonny@email.com"> 
                
                <p>Password</p>
                <!-- <input type="password" for="password" id="" placeholder="min. 8 karakter"> -->
                <input id="password" type="password" name="password" required>

                <p>Confirm Password</p>
                <!-- <input type="password" for="password-confirm" id="" placeholder="min. 8 karakter"> -->
                <input id="password-confirm" type="password" name="password_confirmation" required>

                <div id="cb-text">
                    <input type="checkbox" name="" id="">
                    <a class="tos" href="/listjasa.html">Terms of Service</a> 
                </div>

                <input type="submit" class="button" value="Register">
            </div> 
        </form>
    </div>
</div>
@endsection
