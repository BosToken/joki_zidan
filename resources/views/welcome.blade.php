<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="">

    <title> Peminjaman Buku </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

</head>

<body>

    <div class="hero_area">

        <div class="hero_bg_box">
            <div class="bg_img_box">
                <img src="{{ asset('images/hero-bg.png') }}" alt="">
            </div>
        </div>

        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            Peminjaman Buku
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/login"> <i class="fa fa-user" aria-hidden="true"></i>
                                    Login</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Peminjaman <br>
                                            Buku
                                        </h1>
                                        <p>
                                            Peminjaman buku adalah proses di mana seseorang (biasanya pelajar,
                                            mahasiswa, atau anggota masyarakat) meminjam buku dari suatu institusi,
                                            seperti perpustakaan atau tempat penyewaan buku, untuk digunakan dalam
                                            jangka waktu tertentu.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{ asset('images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Management <br>
                                            Buku
                                        </h1>
                                        <p>
                                            Manajemen Buku adalah proses mengatur, mengelola, dan memantau koleksi buku
                                            di sebuah institusi atau organisasi, seperti perpustakaan, toko buku, atau
                                            layanan peminjaman. Tujuannya adalah memastikan buku-buku dapat diakses
                                            dengan mudah, terawat dengan baik, dan digunakan secara efisien.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{ asset('images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Perpustakaan <br>
                                        </h1>
                                        <p>
                                            Perpustakaan adalah sebuah tempat yang berfungsi untuk mengumpulkan,
                                            menyimpan, mengelola, dan menyediakan akses ke berbagai jenis koleksi
                                            informasi, terutama buku, tetapi juga dokumen, jurnal, media elektronik, dan
                                            materi lainnya.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{ asset('images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel1" data-slide-to="1"></li>
                    <li data-target="#customCarousel1" data-slide-to="2"></li>
                </ol>
            </div>

        </section>
        <!-- end slider section -->
    </div>


    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="service_container">
            <div class="container ">
                <div class="heading_container heading_center">
                    <h2>
                        Fitur <span>Kami</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/s1.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Peminjaman Buku
                                </h5>
                                <p>
                                    Peminjaman buku adalah proses di mana seseorang (biasanya pelajar,
                                    mahasiswa, atau anggota masyarakat) meminjam buku dari suatu institusi,
                                    seperti perpustakaan atau tempat penyewaan buku, untuk digunakan dalam
                                    jangka waktu tertentu.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/s2.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Management
                                    Buku
                                </h5>
                                <p>
                                    Manajemen Buku adalah proses mengatur, mengelola, dan memantau koleksi buku
                                    di sebuah institusi atau organisasi, seperti perpustakaan, toko buku, atau
                                    layanan peminjaman. Tujuannya adalah memastikan buku-buku dapat diakses
                                    dengan mudah, terawat dengan baik, dan digunakan secara efisien.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/s3.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Perpustakaan
                                </h5>
                                <p>
                                    Perpustakaan adalah sebuah tempat yang berfungsi untuk mengumpulkan,
                                    menyimpan, mengelola, dan menyediakan akses ke berbagai jenis koleksi
                                    informasi, terutama buku, tetapi juga dokumen, jurnal, media elektronik, dan
                                    materi lainnya.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end service section -->



    <!-- info section -->

    <section class="info_section layout_padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 info_col">
                    <div class="info_contact">
                        <h4>
                            Address
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +01 1234567890
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="info_social">
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info_col">
                    <div class="info_detail">
                        <h4>
                            Info
                        </h4>
                        <p>
                            necessary, making this the first true generator on the Internet. It uses a dictionary of
                            over 200 Latin words, combined with a handful
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mx-auto info_col">
                    <div class="info_link_box">
                        <h4>
                            Links
                        </h4>
                        <div class="info_links">
                            <a class="active" href="index.html">
                                Home
                            </a>
                            <a class="" href="about.html">
                                About
                            </a>
                            <a class="" href="service.html">
                                Services
                            </a>
                            <a class="" href="why.html">
                                Why Us
                            </a>
                            <a class="" href="team.html">
                                Team
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info_col ">
                    <h4>
                        Subscribe
                    </h4>
                    <form action="#">
                        <input type="text" placeholder="Enter email" />
                        <button type="submit">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <section class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </section>
    <!-- footer section -->

    <!-- jQery -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- owl slider -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>
