<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body background: linear-gradient(126.07deg, #04DC74 -2.02%, #13C4FC 129.72%);>  
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
                <div class="list-order">

                    <table>
                        <tr>
                            <td>Pembuatan web</td>


                            <td style="width:10%"><p class="status" style="background-color:#ff7c78"> Belum Selesai</td>
                            <td style="width:10%"></td>
                            <td style="width:10%"><div  onclick="window.location=''" class="more"> More</td>
                            
                        </tr>
         
                    </table>
                    
                </div>
                <div class="list-order">
                <table>
                        <tr>
                            <td>Pembuatan Intro Bangsa</td>


                            <td style="width:10%"><p class="status" style="background-color:#ff7c78"> Belum Selesai</td>
                            <td style="width:10%"></td>
                            <td style="width:10%"><div  onclick="window.location=''" class="more"> More</td>
                            
                        </tr>
         
                    </table>
                </div>

                <div class="list-order">
                <table>
                        <tr>
                            <td>Masak Masak</td>


                            <td style="width:10%"><p class="status" style="background-color:#69ff6b"> Belum Selesai</td>
                            <td style="width:10%"></td>
                            <td style="width:10%"><div  onclick="window.location=''" class="more"> More</td>
                            
                        </tr>
         
                    </table>
                </div>
                </div>


                
            </div>
        </div>
    </section>
</body>
<script src="https://kit.fontawesome.com/8d8aab7721.js"></script>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

</html>
    