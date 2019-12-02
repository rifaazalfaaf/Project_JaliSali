@extends('layouts.app')

@section('content')
<div class="home">
        <nav>
            <div class="logo">
                <a href="/"><img src="" alt="LOGO"></a>
            </div>
            
            <div class="sign-in">
                <ul>
                    <li><a href="signup.html">Sign Up</a> </li>
                </ul>
            </div>
        </nav>
        
        <div class="heading sign-in-card">
            <h1>Sign In</h1>
            <form method="POST" action="{{ route('login') }}">
                <div class="card2">
                    {{ csrf_field() }}
                    <p>Email</p>
                    <input type="text" name="" id="" placeholder="Masukkan email" value="{{ old('email') }}" required autofocus> 
                    
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <p>Password</p>
                    <input type="password" name="" id="" placeholder="Masukkan password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif


                    <div id="cb-text">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </div>
                    <input type="submit" class="button" value="Sign In">
                </div> 
                <div class="card1">
                    <div class="bottom-text">
                        <p>Belum punya akun? Daftar <a href="signup.html">disini</a></p>
                    </div>
                </div> 
            </form>
           
        </div>
       
    </div>
@endsection
