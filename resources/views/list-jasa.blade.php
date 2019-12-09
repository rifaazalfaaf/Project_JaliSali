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
    <header>
        <div class="logo">
            <a href="/"><img src="" alt="LOGO"></a>
        </div>
        
        <div class="menu">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Wishlist</a></li>
                <li><a href="">Pemesanan</a></li>
                <li><button>Profile<i class="fa fa-user-circle-o"></i></button></li>
            </ul>
        </div>
    </header>

    <div class="breadcrumbs">
        <a href="">Home</a> > <a href="">List Jasa</a> > Semua
    </div>

    <section>
        <div class="wrapper">
            <div class="categories">
                <div class="cat-box">
                    <h2>Kategori</h2>
                    <ul>
                        <li><a href="">Semua</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Desain Logo & Animasi</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Website & Aplikasi</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Fotografi & Video Editing</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Pengajaran</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Dekorasi & Acara</a></li>
                    </ul>
                </div> 
            </div>

            <div class="products">
                <div class="list-products">
                    
                    
                    @foreach($jasa as $js)

                    <div class="list-box">
                        <div class="pict">
                            <div class="price"><p>Rp {{$js->Harga}}</p></div>
                            <div class="fave">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <img src="Foto Jasa/{{$js->Foto}}" alt="">
                        </div>
                        <div class="info"><p>{{$js->NamaJasa}}</p></div>
                    </div>

                    @endforeach







                    <div class="list-box"></div>
                    <div class="list-box"></div>
                    <div class="list-box"></div>
                    <div class="list-box"></div>
                    <div class="list-box"></div>
                    <div class="list-box"></div>
                    <div class="list-box"></div>
                    <div class="list-box"></div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://kit.fontawesome.com/8d8aab7721.js"></script>
</html>
    