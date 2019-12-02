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
                    <input type="text" for="name" id="" placeholder="Your name"> 
                    
                    <p>Email</p>
                    <input type="text" for="email" id="" placeholder="jhonny@email.com"> 
                    
                    <p>Password</p>
                    <input type="password" for="password" id="" placeholder="min. 8 karakter"> 

                    <p>Confirm Password</p>
                    <input type="password" for="password-confirm" id="" placeholder="min. 8 karakter">

                    <div id="cb-text">
                        <input type="checkbox" name="" id="">
                        <a class="tos" href="/listjasa.html">Terms of Service</a> 
                    </div>

                    <input type="submit" class="button" value="Register">
                </div> 
            </form>
        </div>
       
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
