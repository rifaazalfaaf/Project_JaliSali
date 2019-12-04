<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- <header id="header">
        
    </header> -->

    <div class="home">
        <nav>
            <div class="logo">
                <a href="/"><img src="" alt="LOGO"></a>
            </div>
            
            <div class="sign-in">
                <ul>
                    <!-- <li class="sign-in">Sign In</li>
                    <li class="sign-in">Sign In</li> -->
                    <li><a href="/register">Register</a> </li>
                </ul>
            </div>
        </nav>
        
        <div class="heading sign-in-card">
            <h1>Sign In</h1>
            <form method="POST" action="/logincheck">
            {{csrf_field()}}
                <div class="card2">
                    @if ($message = Session::get('salah'))
		                <p style="color:red"> Username atau password salah</p>
	                @endif
                    <p>Username</p>
                    <input type="text" name="username" id="" placeholder="Masukkan username / email"> 

                    <p>Password</p>
                    <input type="password" name="password" id="" placeholder="Masukkan password">

                    <div id="cb-text">
                        <input type="checkbox" name="" id="">
                        Remember Me
                    </div>
                    <input type="submit" class="button" value="Sign In">
                </div> 
                <div class="card1">
                    <div class="bottom-text">
                        <p>Belum punya akun? Daftar <a href="/register">disini</a></p>
                    </div>
                </div> 
            </form>
           
        </div>
       
    </div>

    <footer id="footer">
        <div>ini bagian 1</div>
        <div>ini bagian 2</div>
    </footer>
</body>

<script src="https://kit.fontawesome.com/8d8aab7721.js"></script>

</html>