<?php
include "auth.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Yosan Warmindo</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo6.jpeg" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="submenu">
                                <a href="javascript:;">About</a>
                                <ul>
                                    <li class="scroll-to-section"><a href="#about">Our Stand</a></li>
                                    <li class="scroll-to-section"><a href="#chefs">Our Chef</a></li>
                                </ul>
                            </li>


                            <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#offers">Menu</a></li>
                            <li><a href="profile.php">Member</a></li>
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                            <li class="scroll-to-section mt-2 bg-white"><B><?php echo $_SESSION['username'] ?></B></li>
                            <li><a href="logout.php" onclick="return confirm('Yakin logout?')"><Img style="width: 25px;" src="assets\images\icon.png"></Img>Log out</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Yosan</h4>
                            <h6>Warmindo</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Make A Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="assets\images\yosan3.jpeg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="assets\images\yosan4.jpeg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="assets\images\yosan5.jpeg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>Yosan Warmindo is one of the best choice you have</h2>
                        </div>
                        <p>Mie instan Adalah Makanan yang mudah dimasak dan rasanya pun sangat di gemari oleh hampir semua rakyat Indonesia , salah satunya adalah mie instan indomie. <br><br> warmindo ini menjual semua varian rasa mie indomie, dengan harga yang terbilang jangkau warmindo banyak di temui di daerah perkotaan, pelanggan Warmindo juga terbilang banyak mulai dari anak anak , remaja sampai orang tua gemar memakan Indomie olahan warmindo.</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets\images\kare.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets\images\cabe-ijo.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets\images\salted.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="https://www.youtube.com/watch?v=B8pBcM5jEFI"><i class="fa fa-play"></i></a>
                            <img src="assets\images\yosan3.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->


    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Yosan Menu</h6>
                        <h2>Yosan Menu and Meal Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                            <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Menu</a></li>
                                            <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">Hot Menu</a></a></li>
                                            <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">Premium</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/hype.jpeg" alt="">
                                                            <h4>Indomie Hype Abis</h4>
                                                            <p>Part of the secret of success in the life is to eat what you like and let the food fight it out inside</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>8K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/indomie goreng.jpeg" alt="">
                                                            <h4>Indomie Goreng</h4>
                                                            <p>Eat breakfast like a king, lunch like a prince, and dinner like a pauper</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>8K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/soto.jpg" alt="">
                                                            <h4>Indomie Soto</h4>
                                                            <p>Animals feed, man eats, only a man of wit knows how to eat</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>8K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/kare.jpg" alt="">
                                                            <h4>Indomie Kare</h4>
                                                            <p>You can tell a lot about fellow’s character by his way of eating jellybeans</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>8K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/cabe ijo.png" alt="">
                                                            <h4>Indomie Cabe Ijo</h4>
                                                            <p>If we’re not willing to settle for junk living, we certainly shouldn’t settle for junk food</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>8K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/indomie-goreng.jpg" alt="">
                                                            <h4>Indomie Goreng</h4>
                                                            <p>Eating is always a decision, nobody forces your hand to pick up food and put it into your mouth</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>8K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/keriting.jpg" alt="">
                                                            <h4>Indomie Keriting Goreng Spesial</h4>
                                                            <p>Animals feed, man eats, only a man of wit knows how to eat</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>10K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/indomie goreng.jpeg" alt="">
                                                            <h4>Indomie Goreng</h4>
                                                            <p>Eating is always a decision</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>8K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/laksa.JPG" alt="">
                                                            <h4>Indomie Keriting Laksa Spesial</h4>
                                                            <p>Part of the secret of success in the life is to eat what you like and let the food fight it out inside</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>10K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/soto.jpg" alt="">
                                                            <h4>Indomie Soto</h4>
                                                            <p>Animals feed, man eats, only a man of wit knows how to eat</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>10K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/salted.jpg" alt="">
                                                            <h4>Indomie Keriting Salted Egg Drop</h4>
                                                            <p>You can tell a lot about fellow’s character by his way of eating jellybeans</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>10K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/cabe.jpeg" alt="">
                                                            <h4>Indomie Keriting Goreng Ayam Cabe Rawit</h4>
                                                            <p>If we’re not willing to settle for junk living, we certainly shouldn’t settle for junk food</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>10K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/keriting.jpg" alt="">
                                                            <h4>Indomie Keriting Goreng Spesial</h4>
                                                            <p>Part of the secret of success in the life is to eat what you like and let the food fight it out inside</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>10K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/kornet.jpg" alt="">
                                                            <h4>Indomie Keriting Goreng Kornet</h4>
                                                            <p>Eat breakfast like a king, lunch like a prince, and dinner like a pauper</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>10K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/laksa.JPG" alt="">
                                                            <h4>Indomie Keriting Laksa Spesial</h4>
                                                            <p>Animals feed, man eats, only a man of wit knows how to eat</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>10K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/panggang.jpg" alt="">
                                                            <h4>Indomie Keriting Ayam Panggang</h4>
                                                            <p>You can tell a lot about fellow’s character by his way of eating jellybeans</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>10K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/salted.jpg" alt="">
                                                            <h4>Indomie Keriting Salted Egg Drop</h4>
                                                            <p>If we’re not willing to settle for junk living, we certainly shouldn’t settle for junk food</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>10K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/cabe.jpeg" alt="">
                                                            <h4>Indomie Keriting Goreng Ayam Cabe Rawit</h4>
                                                            <p>Eating is always a decision, nobody forces your hand to pick up food and put it into your mouth</p>
                                                            <div class="price">
                                                                <li class="scroll-to-section"><a href="#reservation">
                                                                        <h6>10K</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Hot Promo</h6>
                        <h2>Our special meal with topping</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class="price">
                                <h6>13k</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>HYPE ABIS</h1>
                                <p class='description'>Nasi Putih, Telur, Kornet, Sosis, Bakso, Free Sayur</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class="price">
                                <h6>13k</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>KARI AYAM</h1>
                                <p class='description'>Beef, Nugget, Keju, Tahu Bakso, Free Sayur</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class="price">
                                <h6>13k</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>SALTED EGG</h1>
                                <p class='description'>Nasi Putih, Telur, Kornet, Sosis, Bakso, Free Sayur</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class="price">
                                <h6>13k</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>SOTO</h1>
                                <p class='description'>Beef, Nugget, Keju, Tahu Bakso, Free Sayur</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price">
                                <h6>13k</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>INDOMIE GORENG</h1>
                                <p class='description'>Nasi Putih, Telur, Kornet, Sosis, Bakso, Free Sayur</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Chef</h6>
                        <h2>We offer the best homemade noodle dishes for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="https://m.facebook.com/WarmindoIndonesia/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/warmindo_official/?hl=id"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="assets\images\foto.jpg" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>Yosan <br> Warmindo<br><br>
                                <h6>10.00 - 20.00</h6>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="assets\images\yosan1.jpeg" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>Rafli Arfiansyah</h4>
                            <span>Jln.Embong kali, Junwangi, Krian, Sidoarjo <br></span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="https://m.facebook.com/WarmindoIndonesia/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/warmindo_official/?hl=id"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="assets\images\foto.jpg" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>Yosan <br> Warmindo <br><br>
                                <h6>10.00 - 20.00</h6>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or Just walkin to our stand</h2>
                        </div>
                        <p>We offer the best homemade noodle dishes for you, eat and enjoy the taste</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4><br>
                                    <span><a href="#">089523376239</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">Yosan.Warmindo@Umsida.ac.id</a><br><a href="#">Umsida@ac.id</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="google-maps">
                                    <h6>---Our Location</h6>
                                    <h4>sebelah parkiran no 3, UMSIDA, Jl. Raya Gelam No.250, Pagerwaja, Gelam, Kec. Candi, Kabupaten Sidoarjo, Jawa Timur 61271</h4>
                                    <hr><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.760988064587!2d112.71078800000002!3d-7.491620999999989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e0b5952f78bd%3A0x98e0f3720a9e8788!2sFakultas%20SAINTEK%20UMSIDA!5e0!3m2!1sid!2sid!4v1669201659390!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Table Reservation</h4>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email " required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="phone" type="text" id="phone" placeholder="Phone Number " required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="NIM" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <div id="filterDate2">
                                        <div class="input-group date" data-date-format="dd/mm/yyyy">
                                            <input name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <select value="time" name="time" id="time">
                                            <option value="time">Time</option>
                                            <option name="Breakfast" id="Breakfast">Breakfast</option>
                                            <option name="Lunch" id="Lunch">Lunch</option>
                                            <option name="Dinner" id="Dinner">Dinner</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="https://m.facebook.com/WarmindoIndonesia/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/warmindo_official/?hl=id"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.php"><img src="assets\images\logo8.jpeg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Yosan Warmindo Co.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>