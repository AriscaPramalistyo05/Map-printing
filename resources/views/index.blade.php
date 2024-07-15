<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Map-Printing</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('assets/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo"><a href="index.html"><img src="{{ asset('assets/images/logo1.png') }}"></a></div>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#konsultasi">Konsultasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#produk">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kontak">Kontak</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- banner section start -->
        <div id="beranda" class="banner_section layout_padding">
            <div class="container">
                <div id="costum_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h1 class="furniture_text">MAP-PRINTING</h1>
                            <p class="there_text">Kualitas cetak terbaik untuk kebutuhan anda.</p>
                            <div class="contact_bt_main">
                                <div class="contact_bt"><a href="#kontak">Hubungi Kami</a></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h1 class="furniture_text">MAP-PRINTING</h1>
                            <p class="there_text">Solusi cetak inovatif. Kualitas yang dapat Anda percayai.</p>
                            <div class="contact_bt_main">
                                <div class="contact_bt"><a href="#kontak">Hubungi Kami</a></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h1 class="furniture_text">MAP-PRINTING</h1>
                            <p class="there_text">Presisi dalam setiap cetakan. Tingkatkan merek Anda dengan solusi
                                berkualitas kami.</p>
                            <div class="contact_bt_main">
                                <div class="contact_bt"><a href="#kontak">Hubungi Kami</a></div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#costum_slider" role="button" data-slide="prev">
                        <i class=""><img src="{{ asset('assets/images/left-arrow.png') }}"></i>
                    </a>
                    <a class="carousel-control-next" href="#costum_slider" role="button" data-slide="next">
                        <i class=""><img src="{{ asset('assets/images/right-arrow.png') }}"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>

    <!-- header section end -->

    <!-- about section start -->
    <div id="konsultasi" class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="about_text">Konsultasi</h1>
                    <p class="lorem_text">
                        Kami menyediakan produk cetak berkualitas tinggi, termasuk pada cetak raport, brosur, kartu
                        nama, dan banyak lagi. Tim profesional kami siap memberikan saran terbaik dan solusi yang tepat
                        untuk setiap proyek cetak yang Anda miliki. Kami mengerti bahwa setiap kebutuhan cetak memiliki
                        keunikan tersendiri, oleh karena itu kami selalu berusaha untuk memberikan layanan yang
                        disesuaikan dengan kebutuhan Anda.<br><br>
                        Hubungi kami sekarang untuk mendapatkan penawaran terbaik dan memulai proyek cetak Anda dengan
                        kami.
                    </p>

                    <div class="read_bt1"><a href="https://wa.me/6285555555555">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image_1"><img src="{{ asset('assets/images/img-1.png') }}"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- furnitures section start -->
    <div class="furnitures_section layout_padding">
        <div class="container">
            <h1 class="our_text">Katalog Produk</h1>
            <p class="ipsum_text">Kami menawarkan berbagai produk cetak berkualitas untuk memenuhi kebutuhan Anda.</p>
            <div class="furnitures_section2 layout_padding">
                <div class="row">
                    <div class="col-md-4">
                        <div class="container_main">
                            <img src="{{ asset('assets/images/img-2.png') }}" alt="Avatar" class="image">
                            <div class="overlay">
                                <a href="#" class="icon" title="Lihat Produk">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <h3 class="temper_text">Cetak Raport</h3>
                        <p class="dololr_text">
                            Kami menyediakan layanan cetak raport berkualitas tinggi untuk berbagai lembaga pendidikan.
                            Dengan bahan terbaik dan hasil cetak yang tajam, raport Anda akan terlihat profesional dan
                            rapi.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="container_main">
                            <img src="{{ asset('assets/images/img-3.png') }}" alt="Avatar" class="image">
                            <div class="overlay">
                                <a href="#" class="icon" title="Lihat Produk">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <h3 class="temper_text">Cetak Brosur</h3>
                        <p class="dololr_text">
                            Brosur berkualitas tinggi yang kami tawarkan cocok untuk berbagai promosi dan informasi.
                            Desain yang menarik dan bahan yang tahan lama akan membuat brosur Anda menonjol di antara
                            yang lain.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="container_main">
                            <img src="{{ asset('assets/images/img-3.png') }}" alt="Avatar" class="image">
                            <div class="overlay">
                                <a href="#" class="icon" title="Lihat Produk">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <h3 class="temper_text">Cetak Cover</h3>
                        <p class="dololr_text">
                            Cover yang profesional dan elegan sangat penting untuk bisnis Anda. Kami menawarkan
                            berbagai pilihan bahan dan desain yang dapat disesuaikan dengan kebutuhan dan preferensi
                            Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- furnitures section end -->
    <!-- who section start -->
    <div class="who_section layout_padding">
        <div class="container">
            <h1 class="who_taital">who we are ?</h1>
            <h4 class="designer_text">DESIGNERS & INNOVATORS</h4>
            <p class="lorem_ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi utLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut</p>
        </div>
        <div class="get_bt_main">
            <div class="get_bt"><a href="#">Get A Quote</a></div>
        </div>
    </div>
    <!-- who section end -->
    <!-- produk section start -->
    <div id="produk" class="projects_section layout_padding">
        <div class="container">
            <h1 class="our_text">Produk</h1>
            <p class="ipsum_text">Produk berkualitas kami</p>
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="projects_section2">
                            <div class="container_main2">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="{{ asset('assets/images/img-4.png') }}" alt="Avatar"
                                                class="image" style="width:100%">
                                            <h1 class="modern_text">Cetak Raport</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="{{ asset('assets/images/img-5.png') }}" alt="Avatar"
                                                class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="{{ asset('assets/images/img-6.png') }}" alt="Avatar"
                                                class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="projects_section2">
                            <div class="container_main1">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="{{ asset('assets/images/img-4.png') }}" alt="Avatar"
                                                class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="{{ asset('assets/images/img-5.png') }}" alt="Avatar"
                                                class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="{{ asset('assets/images/img-6.png') }}" alt="Avatar"
                                                class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="projects_section2">
                            <div class="container_main1">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="{{ asset('assets/images/img-4.png') }}" alt="Avatar"
                                                class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="{{ asset('assets/images/img-5.png') }}" alt="Avatar"
                                                class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="{{ asset('assets/images/img-6.png') }}" alt="Avatar"
                                                class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- projects section end -->
    {{-- <!-- client section start -->
    <div class="clients_section layout_padding">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h1 class="client_text">what is says our clients</h1>
                        <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        <div class="clients_section2 layout_padding">
                            <div class="client_1">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="image_7"><img src="{{ asset('assets/images/img-7.png') }}"></div>
                                        <div class="quote_icon"><img
                                                src="{{ asset('assets/images/quote-icon.png') }}"></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <h1 class="loksans_text">loksans</h1>
                                        <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit
                                            in voluptate velit</p>
                                    </div>
                                </div>
                            </div>
                            <div class="client_2">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="image_7"><img src="{{ asset('assets/images/img-8.png') }}"></div>
                                        <div class="quote_icon"><img
                                                src="{{ asset('assets/images/quote-icon.png') }}"></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <h1 class="loksans_text">loksans</h1>
                                        <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit
                                            in voluptate velit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <h1 class="client_text">what is says our clients</h1>
                        <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        <div class="clients_section2 layout_padding">
                            <div class="client_1">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="image_7"><img src="{{ asset('assets/images/img-7.png') }}"></div>
                                        <div class="quote_icon"><img
                                                src="{{ asset('assets/images/quote-icon.png') }}"></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <h1 class="loksans_text">loksans</h1>
                                        <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit
                                            in voluptate velit</p>
                                    </div>
                                </div>
                            </div>
                            <div class="client_2">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="image_7"><img src="{{ asset('assets/images/img-8.png') }}"></div>
                                        <div class="quote_icon"><img
                                                src="{{ asset('assets/images/quote-icon.png') }}"></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <h1 class="loksans_text">loksans</h1>
                                        <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit
                                            in voluptate velit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <h1 class="client_text">what is says our clients</h1>
                        <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        <div class="clients_section2 layout_padding">
                            <div class="client_1">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="image_7"><img src="{{ asset('assets/images/img-7.png') }}"></div>
                                        <div class="quote_icon"><img
                                                src="{{ asset('assets/images/quote-icon.png') }}"></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <h1 class="loksans_text">loksans</h1>
                                        <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit
                                            in voluptate velit</p>
                                    </div>
                                </div>
                            </div>
                            <div class="client_2">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="image_7"><img src="{{ asset('assets/images/img-8.png') }}"></div>
                                        <div class="quote_icon"><img
                                                src="{{ asset('assets/images/quote-icon.png') }}"></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <h1 class="loksans_text">loksans</h1>
                                        <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit
                                            in voluptate velit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <h1 class="client_text">what is says our clients</h1>
                        <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        <div class="clients_section2 layout_padding">
                            <div class="client_1">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="image_7"><img src="{{ asset('assets/images/img-7.png') }}"></div>
                                        <div class="quote_icon"><img
                                                src="{{ asset('assets/images/quote-icon.png') }}"></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <h1 class="loksans_text">loksans</h1>
                                        <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit
                                            in voluptate velit</p>
                                    </div>
                                </div>
                            </div>
                            <div class="client_2">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="image_7"><img src="{{ asset('assets/images/img-8.png') }}"></div>
                                        <div class="quote_icon"><img
                                                src="{{ asset('assets/images/quote-icon.png') }}"></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <h1 class="loksans_text">loksans</h1>
                                        <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit
                                            in voluptate velit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client section end --> --}}
    <!-- contact section start -->
    <div id="kontak" class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                                width="600" height="600" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="contact_text">Hubungi Kami</h1>
                    <h5 class="contact_text">Kalian masih bingung? Ayo hubungi kami untuk konsultasi lebih lanjut!</h5>
                    <div class="mail_sectin">
                        <input type="text" class="email-bt" placeholder="Nama" name="Name">
                        <input type="text" class="email-bt" placeholder="Email" name="Name">
                        <input type="text" class="email-bt" placeholder="Nomor Telepon" name="Name">
                        <textarea class="massage-bt" placeholder="Pesan" rows="5" id="comment" name="Massage"></textarea>
                        <div class="send_bt"><a href="#">Kirim</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <h1 class="customer_text">INFORMASI</h1>
                    <p class="footer_lorem_text">Kami memiliki berbagai varian cetak yang berkualitas yang dapat anda
                        percayai.
                    </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="customer_text">LET US HELP YOU</h1>
                    <p class="footer_lorem_text">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by
                    </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="customer_text">UseFul Links</h1>
                    <p class="footer_lorem_text1">About Us<br>
                        Careers<br>
                        Sell on shopee<br>
                        Press & News<br>
                        Competitions<br>
                        Terms & Conditions
                    </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="customer_text">OUR Design</h1>
                    <p class="footer_lorem_text">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by
                    </p>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter your email"
                    aria-label="Enter your email" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><a href="#">Subscribe</a></span>
                </div>
            </div>
        </div>
    </div>
    <!--  footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://html.design">Free html
                    Templates</a> Distribution By <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
        <!-- copyright section end -->
        <!-- Javascript files-->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-3.0.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugin.js') }}"></script>
        <!-- sidebar -->
        <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <!-- javascript -->
        <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
        <script src="{{ asset('assets/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js') }}">
        </script>
</body>

</html>
