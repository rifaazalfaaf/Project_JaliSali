<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mipa Bersatu</title>
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}">   
    <link rel="stylesheet" href="css/style.css">
    
    <script type="text/javascript" src="js/js.js"></script>
</head>

<body>
    <nav class="bg-transparent">
        <div class="logo"> 
            <a href="/"><img src="{{ URL::asset('img/header.png') }}" alt=""></a>
        </div>
        
        <ul class="nav-link">
            <li> 
                <a href="/home">Home</a>
            </li>

            <li>
                <a href="#"><span style="color:#cbcbcb;">Quiz</span></a>
            </li>
            
            <li class="focus-drop">
                <div class="dropdown">
                    <a href="#" class="dropdown-a">Form</a>
                    <div class="dropdown-content form-drop">
                        <a href="/biodata">Biodata</a>
                      
                        <a href="#"><span style="color:#cbcbcb;">Pemetaan</span></a>
                    </div>
                </div>
            </li>
            
            <li>
                <a href="/faq">FAQ</a>
            </li>
        </ul>

        <li class="dropdown">
            <button class="dropbtn">{{Session::get('npm')}}</button>
            <div class="dropdown-content right-side">
                <a href="/logout">Logout</a>
                <a href="/ubahpassword">Edit Password</a>
            </div>
        </li>

        <div class="hamburger">
            <a href="javacript:void(0)" onclick="openNav()">
                <div></div>
                <div></div>
                <div></div>
            </a>
        </div>

        <div class="side-bar" id="side-bar">
            <a href="javacript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="#">Quiz</a></li>
                <li><a href="#">Form</a>
                    <ul>
                        <li><a href="/biodata">Biodata</a></li>
                        <!-- <li><a href="">Himpunan</a></li> -->
                        <li><a href="#"><span>Pemetaan</span></a></li>
                    </ul>
                </li>
                <li><a href="/faq">FAQ</a></li>
                <hr class="break">
                <li><a href="">Ubah Password</a></li>
                <li><a href="">Logout</a></li>
            </ul>

        </div>
    </nav>

    

    <section>
        <div class="carousel-container">
            <div class="slides fade" style="display: block">
            
              <?php $random = rand(1,4);
              echo(' <img src="'.URL::asset('img/Slider/slider'.'3'.'.jpg').'">');?>
                <div class="text greeting">
                    <div class="greeting-text">Selamat Datang Mahasiswa Baru FMIPA 2019!</div>
                    
                </div>
            </div>

            <div class="slides fade">
            <?php $random = rand(1,4);
              echo(' <img src="'.URL::asset('img/Slider/slider'.'1'.'.jpg').'">');?>
                <div class="text greeting">
                    <div class="greeting-text">Selamat Datang Mahasiswa Baru FMIPA 2019!</div>
                    
                </div><!-- <div class="text">Lorem ipsum dolor sit amet.</div> -->
            </div>

            <div class="slides fade">
            <?php $random = rand(1,4);
              echo(' <img src="'.URL::asset('img/Slider/slider'.'2'.'.jpg').'">');?>
                <div class="text greeting">
                    <div class="greeting-text">Selamat Datang Mahasiswa Baru FMIPA 2019!</div>
                    
                </div><!-- <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, repellat quibusdam? Quae.</div> -->
            </div>

            <div class="slides fade">
            <?php $random = rand(1,4);
              echo(' <img src="'.URL::asset('img/Slider/slider'.'4'.'.jpg').'">');?>
                <div class="text greeting">
                    <div class="greeting-text">Selamat Datang Mahasiswa Baru FMIPA 2019!</div>
                    
                </div><!-- <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, possimus optio. Nam laudantium vero porro officia! Quas error mollitia id sed tenetur.</div> -->
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div class="div-container introduction-section">
            <h1>MIPA BERSATU 2019</h1>
            <p> MIPA Bersatu merupakan sebuah kegiatan yang sasarannya adalah mahasiswa baru FMIPA Unpad, sebagai wadah bagi mahasiswa baru ini untuk lebih mengenal mengenai FMIPA Unpad dan menerima bekal untuk menghadapi kehidupan kemahasiswaan di lingkungan FMIPA Unpad.
                Pada tahun ini, MIPA Bersatu 2019 memiliki tagline "Precious Harmonious", yang memiliki arti keindahan dan keharmonisan.</p> 
            <div class="logo-section">
                <img src="{{ URL::asset('img/logo.png') }}" alt="">
            </div>
                
            <p> Sesuai dengan logo MIPA BERSATU 2019 yaitu merak yang mengandung makna indah dan harmonis dengan harapan MIPA BERSATU 2019 menciptakan keabadian dari hubungan yang harmonis antar peserta MIPA BERSATU 2019. 
                Harmonis dimana setiap diri peserta MIPA BERSATU 2019 dapat saling merangkul bersama di setiap masalah sehingga terjadi keselarasan hidup guna mencapai kebahagiaan bersama.
                    </p>
        </div>

        <div class="div-container introduction-section">
            <h1>Asha si burung merak MIPA Bersatu 2019</h1>
            <div class="logo-section">
                <img src="{{ URL::asset('img/maskot.png') }}" alt="">
            </div>
            <p>Kata Asha diambil dari bahasa Sanskerta yang berarti Harapan. Dengan wujudnya yang diambil dari logo MIPA Bersatu 2019, Asha si burung merak ini merupakan wujud nyata dari harapan-harapan yang terkandung dalam logo MIPA Bersatu 2019.</p>
            
        </div>

        <!-- <div class="div-container grid-6 grid-6-mobile">
             -->
            <!-- <div class="home-video">
                <video controls>
                    <source type="video/webm" src="img/videocontoh.mp4"></source>
                </video>
               
            </div> -->
            <!-- <div class="text-content">
                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro commodi, accusantium alias et dolorem nihil nulla amet animi, qui quidem distinctio!</p>
            </div>  -->
        <!-- </div> -->

        <div class="div-container">
            <h2>Gallery</h2>
            <!-- <a href="gallery.html"> -->
                <div class="gallery">

                    <!-- <img src="{{ URL::asset('img/Galeri/Foto (1).jpg') }}"class="gallery-items"> -->
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>

                    <!-- <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div>
                    <div class="gallery-items"></div> -->
                </div>    
            </a>

                <!-- <a href="#"> <img src="https://picsum.photos/300/150?random=4"></a> 
                <a href="#"> <img src="https://picsum.photos/300/150?random=5"></a>
                <a href="#"> <img src="https://picsum.photos/300/150?random=6"></a>
                <a href="#"> <img src="https://picsum.photos/300/150?random=7"></a>
                <a href="#"> <img src="https://picsum.photos/300/150?random=8"></a>
                <a href="#"> <img src="https://picsum.photos/300/150?random=9"></a>
                <a href="#"> <img src="https://picsum.photos/300/150?random=10"></a>
                <a href="#"> <img src="https://picsum.photos/300/150?random=11"></a>
                <a href="#"> <img src="https://picsum.photos/300/150?random=12"></a>
                <a href="#"> <img src="https://picsum.photos/300/150?random=13"></a>
                <a href="#"> <img src="https://picsum.photos/300/150?random=14"></a>
                <a href="#"> <img src="https://picsum.photos/300/150?random=15"></a> -->
            </div>
        </div>

    
    </section>



    

    <footer style="background: rgba(0, 0, 0, 0.8) ">
        <div class="social-media">
            <a href="http://line.me/ti/p/~@ena9977y"><i class="fab fa-line"></i>@ena9977y</a>
            <a href="https://www.instagram.com/mipabersatu/"><i class="fab fa-instagram"></i>mipabersatu</a>
            <a href="https://www.fmipa.unpad.ac.id/"><i class="fas fa-globe"></i>fmipa.unpad.ac.id</a>
        </div>
        <p> &copy 2019 Prodentic Himatif FMIPA Unpad</p>
    </footer>
    <script src="https://kit.fontawesome.com/8d8aab7721.js"></script> 
</body>
</html>