<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$_SESSION['usernamee']=1;
?>
<head>
    <title>Magical Touch Events</title>
    <link rel="icon" href="images/logo1.png">


    <link rel="stylesheet" type="text/css" href="loader/css/jquery.fancybox.css" media="screen" />
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="loader/css/custom.css" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <script src="js/custom.js"></script>
</head>

<style>
    /* Center the loader */




    /* Add animation to "page content" */
    .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 1s;
        animation-name: animatebottom;
        animation-duration: 2s
    }

    @-webkit-keyframes animatebottom {
        from { bottom:-100px; opacity:0 }
        to { bottom:0px; opacity:1 }
    }

    @keyframes animatebottom {
        from{ bottom:-100px; opacity:0 }
        to{ bottom:0; opacity:1 }
    }
    .animate-left {
        position: relative;
        -webkit-animation-name: left;
        -webkit-animation-duration: 1s;
        animation-name: left;
        animation-duration: 2s
    }

    @-webkit-keyframes left {
        from { left:-100px; opacity:0 }
        to { left:0px; opacity:1 }
    }

    @keyframes left {
        from{ left:-100px; opacity:0 }
        to{ left:0; opacity:1 }
    }
    .animate-top {
        position: relative;
        -webkit-animation-name: top;
        -webkit-animation-duration: 1s;
        animation-name: top;
        animation-duration: 2s
    }

    @-webkit-keyframes top {
        from { top:-100px; opacity:0 }
        to { top:0px; opacity:1 }
    }

    @keyframes top {
        from{ top:-100px; opacity:0 }
        to{ top:0; opacity:1 }
    }
    .animate-right {
        position: relative;
        -webkit-animation-name: right;
        -webkit-animation-duration: 1s;
        animation-name: right;
        animation-duration: 2s
    }

    @-webkit-keyframes right {
        from { right:-100px; opacity:0 }
        to { right:0px; opacity:1 }
    }

    @keyframes right {
        from{ right:-100px; opacity:0 }
        to{ right:0; opacity:1 }
    }




    /* Center the loader */
    #loading{
        background-color: #7B059797	;
        opacity: 0.7;
        height: 100%;
        width: 100%;
        position: fixed;
        z-index: 1;
        margin-top: 0px;
        top: 0px;
        z-index: 90;
    }
    #loading-center{
        width: 100%;
        height: 100%;
        position: relative;
    }
    #loading-center-absolute {
        position: absolute;
        left: 50%;
        top: 50%;
        height: 50px;
        width: 150px;
        margin-top: -25px;
        margin-left: -75px;
    }
    .object{
        width: 8px;
        height: 50px;
        margin-right:5px;
        background-color: #FFF;
        -webkit-animation: animate 1s infinite;
        animation: animate 1s infinite;
        float: left;
    }

    .object:last-child {
        margin-right: 0px;
    }

    .object:nth-child(10){
        -webkit-animation-delay: 0.9s;
        animation-delay: 0.9s;
    }
    .object:nth-child(9){
        -webkit-animation-delay: 0.8s;
        animation-delay: 0.8s;
    }
    .object:nth-child(8){
        -webkit-animation-delay: 0.7s;
        animation-delay: 0.7s;
    }
    .object:nth-child(7){
        -webkit-animation-delay: 0.6s;
        animation-delay: 0.6s;
    }
    .object:nth-child(6){
        -webkit-animation-delay: 0.5s;
        animation-delay: 0.5s;
    }
    .object:nth-child(5){
        -webkit-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }
    .object:nth-child(4){
        -webkit-animation-delay: 0.3s;
        animation-delay: 0.3s;
    }
    .object:nth-child(3){
        -webkit-animation-delay: 0.2s;
        animation-delay: 0.2s;
    }
    .object:nth-child(2){
        -webkit-animation-delay: 0.1s;
        animation-delay: 0.1s;
    }
    @-webkit-keyframes animate {

        50% {
            -ms-transform: translateX(-25px) scaleY(0.5);
            -webkit-transform: translateX(-25px) scaleY(0.5);
            transform: translateX(-25px) scaleY(0.5);

        }

    }

    @keyframes animate {
        50% {
            -ms-transform: translateX(-25px) scaleY(0.5);
            -webkit-transform: translateX(-25px) scaleY(0.5);
            transform: translateX(-25px) scaleY(0.5);
        }

    }





</style>
<body  >
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
        </div>
    </div>
</div>

<script>
    var myVar;

    function myFunction() {
       setTimeout(showPage, 3000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
</script>


<?php

if(isset($_POST['username'])){
    if(empty($_POST['username'])  ){

        header("location:login/login.php");
    }
    if(empty( $_POST['password'])){
        header("location:login/login.php");
    }
    else{
        $u=$_POST['username'];
        $p=$_POST['password'];
        @ $db = new mysqli('localhost', 'root', '', 'test');
        if (mysqli_connect_errno()) {
            echo 'Error: Could not connect to database. Please try again later.';
            exit;
        }
// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- add to database
        $query = "SELECT * FROM events.users where password='".$p."' and username='".$u."' ";
        $result = $db->query($query);


    }
}
?>

<header class="site-header" >
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <a href="#"><img src="images/logo1.png" alt="logo"></a>
                        </div><!-- .site-title -->
                    </div><!-- .site-branding -->
                </div><!-- .col -->

                <div class="col-2 col-lg-7 order-3 order-lg-2">
                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none ">

                        </div><!-- .hamburger-menu -->

                        <ul class="animate-top">
                            <li><a href="#head" >Home</a></li>
                            <li><a href="About%20Us.php" >About us</a></li>
                            <li><a href="#ser" >Services</a></li>
                            <li><a href="Team.php" >Team</a></li>
                            <li><a href="#gal">Gallery</a></li>
                            <li><a href="#par">Sponsors</a></li>
                            <?php
                            if(isset($_POST['username'])){
                                if(empty($_POST['username'])  ){

                                    header("location:login.php");
                                }
                                if(empty( $_POST['password'])){
                                    header("location:login.php");
                                }
                                else{
                                    $u=$_POST['username'];
                                    $p=$_POST['password'];
                                    $_SESSION['us']=$_POST['username'];
                                    @ $db = new mysqli('localhost', 'root', '', 'test');
                                    if (mysqli_connect_errno()) {
                                        echo 'Error: Could not connect to database. Please try again later.';
                                        exit;
                                    }
// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- add to database
                                    $query = "SELECT * FROM events.users where password='".$p."' and username='".$u."' ";
                                    $result = $db->query($query);
                                    //                        if($result->num_rows<1) echo "no data";
                                    $row=$result->fetch_row();
                                    $num_results = $result->num_rows;
                                    if($num_results==1 ){


                                        echo " <li><a href=\"profile/action_page.php\">profile</a></li>";


                                    }

                                    $db->close();
                                }
                            }
                            if (isset($_SESSION['about us'])){
                                echo " <li><a href=\"#\">profile</a></li>";
                            }
                            ?>



                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->

                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">
                        <?php

                            if(isset($_POST['username'])){
                                if(empty($_POST['username'])  ){

                                    header("location:login.php");
                                    }
                                    if(empty( $_POST['password'])){
                                    header("location:login.php");
                                    }
                                    else{
                                    $u=$_POST['username'];
                                    $p=$_POST['password'];
                                    @ $db = new mysqli('localhost', 'root', '', 'test');
                                    if (mysqli_connect_errno()) {
                                        echo 'Error: Could not connect to database. Please try again later.';
                                        exit;
                                    }
// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- add to database
                                    $query = "SELECT * FROM events.users where password='".$p."' and username='".$u."' ";
                                    $result = $db->query($query);
                                    //                        if($result->num_rows<1) echo "no data";
                                    $row=$result->fetch_row();
                                    $num_results = $result->num_rows;
                                    if($num_results==1 ){
                                     echo "<a class='btn gradient-bg animate-right' style='color: white'>$row[0] </a>";
                                     }
                                    else{
                                        echo "<a class='btn gradient-bg animate-right' style='color: white' href='login/login.php'>login</a>";


                                    }
                                     $db->close();
                                     }
                                     }
                            elseif (isset($_SESSION['about us'])){
                                $r=$_SESSION['about us'];
                                echo "<a class='btn gradient-bg animate-right' style='color: white' >$r</a>";
                            }

                            else {
                                echo "<a class='btn gradient-bg animate-right' style='color: white' href='login/login.php'>login</a>";
                            }


                            ?>

<!--                        <a class="btn gradient-bg" href="login/login.html">Login</a>-->
                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->




    <div id="head" class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-date="2018/05/01" style="background: url('images/header-bg.jpg') no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">

                                    <h2 class="entry-title animate-bottom">Magical Touch events</h2>
                                    <h3 style="color: #f8d7da" class="animate-bottom">We believe all events have a purpose, whether you’re celebrating<br>
                                        a birth, a wedding or a brand launch.<br>
                                        <br>Magical Touch focuses on bringing this to life, creating and <br>
                                        delivering events that become timeless memories<br>
                                        long after they’re completed.</h3>
                                    <h3 style="color: #f8d7da" class=" animate-bottom">Book your event now!</h3>
                                </div><!--- .entry-header -->

                                <div class="entry-footer">
                                    <?php

                                    if(isset($_POST['username'])){
                                        if(empty($_POST['username'])  ){

                                            header("location:login.php");
                                        }
                                        if(empty( $_POST['password'])){
                                            header("location:login.php");
                                        }
                                        else{
                                            $u=$_POST['username'];
                                            $p=$_POST['password'];

                                            $_SESSION['name']=$u;
                                            @ $db = new mysqli('localhost', 'root', '', 'test');
                                            if (mysqli_connect_errno()) {
                                                echo 'Error: Could not connect to database. Please try again later.';
                                                exit;
                                            }
// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- add to database
                                            $query = "SELECT * FROM events.users where password='".$p."' and username='".$u."' ";
                                            $result = $db->query($query);
                                            //                        if($result->num_rows<1) echo "no data";
                                            $row=$result->fetch_row();
                                            $num_results = $result->num_rows;
                                            if($num_results==1){
                                                echo "<a target='_blank' class=\"btn gradient-bg animate-left\" href=\"Booking/book.php\" >Book here</a>";
                                            }
                                            $_SESSION['name']=$u;
                                            $db->close();
                                        }
                                    }
                                 elseif (isset($_SESSION['about us'])){
                                                echo "<a target='_blank' class=\"btn gradient-bg animate-left\" href=\"Booking/book.php\" >Book here</a>";
                            }
                                    else {
                                        $_SESSION['not login']=1;
                                        echo "<a class=\"btn gradient-bg animate-left\" href=\"login/login.php\" >Book here</a>";
                                    }

                                    ?>
                                </div><!-- .entry-footer" -->
                            </div><!-- .col -->
                        </div><!-- .container -->
                    </div><!-- .hero-content -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->

            <div class="swiper-slide" data-date="2019/05/01" style="background: url(images/featured-events-bg.jpg) no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">

                                    <h2 class="entry-title">Magical Touch events</h2>
                                    <h3 style="color: #f8d7da">We believe all events have a purpose, whether you’re celebrating<br>
                                        a birth, a wedding or a brand launch.<br>
                                        <br>Magical Touch focuses on bringing this to life, creating and <br>
                                        delivering events that become timeless memories<br>
                                        long after they’re completed.</h3>
                                    <h3 style="color: #f8d7da">Book your event now!</h3>
                                </div><!--- .entry-header -->

                                <div class="entry-footer">
                                    <a class="btn gradient-bg" href="Sign%20up/sign%20up.html">Book here</a>
                                </div><!-- .entry-footer" -->
                            </div><!-- .col -->
                        </div><!-- .container -->
                    </div><!-- .hero-content -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->

            <!-- .swiper-wrapper -->
        </div>

        <!-- Add Pagination -->

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
    </div><!-- .swiper-container -->
</header><!-- .site-header -->

<div id="about" class="homepage-info-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-5">
                <figure>
                    <img src="images/logo-2.png" alt="logo">
                </figure>
            </div>

            <div class="col-12 col-md-8 col-lg-7">
                <header class="entry-header">
                    <h2 class="entry-title animate-right">What is Magical Touch and why choose our services?</h2>
                </header>

                <div class="entry-content">
                    <p>Our team guarantees a professional service from the moment we start planning your event to
                        the finish. Our aim is always to surpass our clients’ expectations and this is the Magical Touch on which we judge ourselves.</p>
                </div>

                <footer class="entry-footer">
                    <a href="About%20Us.php" class="btn gradient-bg">Read More</a>
                </footer>
            </div>
        </div>
    </div>
</div>

<div id="team" class="homepage-featured-events">
    <div class="container">
        <h1 style="font-family: 'Century Schoolbook' ;color: #f8d7da;text-align: center">Our Team</h1>

        <div class="row">
            <div class="col-12">
                <div class="featured-events-wrap flex flex-wrap justify-content-between">


                    <div class="event-content-wrap positioning-event-1">
                        <figure>
                            <a href="Team.php"><img src="images/modern.jpg" alt="1" class="w3-animate-top"></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">CASEY MULLER</h3>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-2">
                        <figure>
                            <a href="Team.php"><img src="images/2.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Jack Robirt</h3>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-3">
                        <figure>
                            <a href="Team.php"><img src="images/3.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Anabelle Lor</h3>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-4 half">
                        <figure>
                            <a href="Team.php"><img src="images/events-in-london.jpg" alt=""></a>
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-5 half">
                        <figure>
                            <a href="Team.php"><img src="images/check-july.png" alt=""></a>
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-6 half">
                        <figure>
                            <a href="Team.php"><img src="images/summer-festivals.jpg" alt=""></a>
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-7">
                        <figure>
                            <a href="Team.php"><img src="images/90.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">KATIE TOWNE</h3>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-8">
                        <figure>
                            <a href="#"><img src="images/1.jpg" alt="1"></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Michael Smith</h3>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-9">
                        <figure>
                            <a href="#"><img src="images/smoke.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">MEGAN PIERCE</h3>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-10 half">
                        <figure>
                            <a href="#"><img src="images/summer-festival.jpg" alt=""></a>
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-11 half">
                        <figure>
                            <a href="#"><img src="images/autumn.jpg" alt=""></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="ser" class="homepage-next-events">
    <div class="container">
        <div class="row">
            <div style="margin-left: 10%" class="next-events-section-header">
                <h2  class="entry-title">Our Services</h2>
                <p >We cater for every aspect of each event with a flexible range of services at your complete disposal.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="#"><img src="images/next.jpg" alt="1"></a>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Weddings</h3>
                    </header>

                    <div class="entry-content">
                        <p>We will create the wedding of your dreams. Whether it’s large and lavish, or small and intimate, our team of
                            experts will work closely with you to make sure your special day is a beautiful memory for the rest of your life.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="#"><img src="images/nnn.jpg" alt="1"></a>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Private</h3>
                    </header>

                    <div class="entry-content">
                        <p>No matter what the size of your event or the occasion, we will work closely with you from concept to creation in order to deliver an event that surpasses your expectations.
                            Alternatively speak to us about our pre-planned, pre-perfected turnkey events, which we can deliver immediately</p>
                    </div>

                    <footer class="entry-footer">
                        <a href="services/services.html">Read More</a>
                    </footer>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="#"><img src="images/next2.jpg" alt="1"></a>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Corporate</h3>
                    </header>

                    <div class="entry-content">
                        <p>We specialise in a wide variety of corporate events, from brand launches to end-of-year celebrations.
                            Our team of professional event planners will work closely with you to create an event that perfectly
                            positions your business in the eyes of your customers and employees.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="gal" class="homepage-regional-events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="regional-events-heading entry-header flex flex-wrap justify-content-between align-items-center">
                    <h2 class="entry-title">Gallery</h2>
                </header>

                <div class="swiper-container homepage-regional-events-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure>
                                <div class="   ">
                                    <img alt="" src="img/2.jpg" >
                                    <div class="portfolio_hover_area" >
                                        <a class="event-overlay-link flex justify-content-center align-items-center fancybox" href="img/2.jpg" title="Organized by Diamond" ><span class="fa fa-search"></span></a>

                                    </div>
                                </div>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Adel Concert </h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date">friday <span>Jan 1, 2019</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <div class="   ">
                                    <img alt="" src="img/1.jpg" >
                                    <div class="portfolio_hover_area" >
                                        <a data-fancybox-group="1" class="event-overlay-link flex justify-content-center align-items-center fancybox" href="img/1.jpg" title="Organized by Diamond" ><span class="fa fa-search"></span></a>

                                    </div>
                                </div>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Hary Shower party</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date">monday <span>mar 26, 2018</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <div class="   ">
                                    <img alt="" src="img/7.jpg" >
                                    <div class="portfolio_hover_area" >
                                        <a data-fancybox-group="1" class= "event-overlay-link flex justify-content-center align-items-center fancybox" href="img/7.jpg" title="Organized by Diamond" ><span class="fa fa-search"></span></a>

                                    </div>
                                </div>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Danial Wedding</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date">Sunday <span>agu 27, 2018</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <div class="   ">
                                    <img alt="" src="img/44.jpg" >
                                    <div class="portfolio_hover_area" >
                                        <a data-fancybox-group="1" class="event-overlay-link flex justify-content-center align-items-center fancybox" href="img/44.jpg" title="Organized by Diamond" ><span class="fa fa-search"></span></a>

                                    </div>
                                </div>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">SOSO birthday</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date">Saturday <span>Jan 17, 2015</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <div class="   ">
                                    <img alt="" src="img/55.jpg" >
                                    <div class="portfolio_hover_area" >
                                        <a data-fancybox-group="1" class="event-overlay-link flex justify-content-center align-items-center fancybox" href="img/55.jpg" title="Organized by Diamond" ><span class="fa fa-search"></span></a>

                                    </div>
                                </div>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Music Concert</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->



                        <div class="swiper-slide" >
                            <figure>
<!--                                <img src="images/event-slider-6.jpg" alt="" ">-->
<!--                                <a class="event-overlay-link flex justify-content-center align-items-center" ><span class="fa fa-search">+</span></a>-->
                                <div class="   ">
                                    <img alt="" src="img/6.jpg" >
                                    <div class="portfolio_hover_area" >
                                        <a data-fancybox-group="1" class="event-overlay-link flex justify-content-center align-items-center fancybox" href="img/6.jpg" title="Organized by Diamond" ><span class="fa fa-search"></span></a>

                                    </div>
                                </div>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">EDM Festival</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->



                        <div class="swiper-slide" >
                            <figure>
                                <!--                                <img src="images/event-slider-6.jpg" alt="" ">-->
                                <!--                                <a class="event-overlay-link flex justify-content-center align-items-center" ><span class="fa fa-search">+</span></a>-->
                                <div class="   ">
                                    <img alt="" src="img/5.jpg" >
                                    <div class="portfolio_hover_area" >
                                        <a data-fancybox-group="1" class="event-overlay-link flex justify-content-center align-items-center fancybox" href="img/5.jpg" title="Organized by Diamond" ><span class="fa fa-search"></span></a>

                                    </div>
                                </div>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">EDM Festival</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                    </div><!-- .swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div>
                </div><!-- .swiper-container -->

                <div id="par" class="events-partners">
                    <header class="entry-header">
                        <h2 class="entry-title">Sponsors</h2>
                    </header>

                    <div class="events-partners-logos flex flex-wrap justify-content-between align-items-center">
                        <div class="event-partner-logo">
                            <a href="#"><img src="images/pixar.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/the-pirate.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/himalayas.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/sa.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/south-porth.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/himalayas.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/sa.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/south-porth.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/pixar.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/the-pirate.png" alt=""></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="footer-logo">
                    <a href="#"><img src="images/logo1.png" alt="logo"></a>
                </figure>

                <nav class="footer-navigation">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#head">Home</a></li>
                        <li><a href="About%20Us.php">About us</a></li>
                        <li><a href="#ser">Services</a></li>
                        <li><a href="Team.php">Team</a></li>
                        <li><a href="#gal">Gallery</a></li>
                        <li><a href="#par">Partners</a></li>

                    </ul>
                </nav>


                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy; Omar Hannon & Masa Ajaj   All rights reserved
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="https://www.snapchat.com/add/diamondevent19"><i class="fa fa-snapchat"></i></a></li>
                        <li><a href="https://instagram.com/diamondevents2019?utm_source=ig_profile_share&igshid=in63rnml52x1"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/Diamond-Events-260747458199967/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/DiamondEvents12"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="back-to-top flex justify-content-center align-items-center">
    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
</div>

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='js/circle-progress.min.js'></script>
<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>
<!---->
<!---->
<script src="loader/js/jquery-1.12.1.min.js"></script>
<script src="loader/js/bootstrap.min.js"></script>

<!-- Bootsnav js -->
<script src="loader/js/bootsnav.js"></script>
<!-- JS Implementing Plugins -->
<script src="loader/js/isotope.js"></script>
<script src="loader/js/isotope-active.js"></script>
<script src="loader/js/jquery.fancybox.js?v=2.1.5"></script>
<script src="loader/js/jquery.scrollUp.min.js"></script>
<script src="loader/js/main.js"></script>


</body>
</html>