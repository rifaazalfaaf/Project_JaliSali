<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>
</head>
<body>
    <!-- <header id="header">
        
    </header> -->
    <script>
        if(true) //TODO: ganti sama is login success
            swal('Login Sukses!', '', 'success');
    </script>
    <div class="home">
        <nav>
            <div class="logo">
                <a href="/"><img src="" alt="LOGO"></a>
            </div>
            
            <div class="sign-in">
                <ul>
                    <!-- <li class="sign-in">Sign In</li>
                    <li class="sign-in">Sign In</li> -->
                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Sign In</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                </ul>
            </div>
        </nav>
        
        <div class="heading">
            <h1>Cari Jasa yang Kamu Mau Disini</h1>
            <div class="search-box">
                <input type="text" placeholder="Masukkan kata kunci">
                <div class="search-logo">
                    <a href="">
                        <div class="search">
                            <i class="fas fa-search"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>  
    </div>

    <section>
        Tes
    </section>

    <footer id="footer">
        <div>ini bagian 1</div>
        <div>ini bagian 2</div>
    </footer>
</body>

<script src="https://kit.fontawesome.com/8d8aab7721.js"></script>

</html>