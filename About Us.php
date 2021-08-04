<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<head>
    <title>About us | Magical Touch</title>
    <link rel="icon" href="images/next-events-header-bg.png">

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
</head>
<style>
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
<body class="events-news-page">
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
<header class="site-header">
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
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul class="animate-top">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="services/services.html">Services</a></li>
                            <li><a href="Team.php">Team</a></li>

                            <?php
                            if(isset($_SESSION['name'])){
                                echo " <li><a href=\"profile/action_page.php\">profile</a></li>";
                              $_SESSION['about us']=$_SESSION['name'];
                            }

                            ?>
                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->
                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">
                        <?php
                        if(isset($_SESSION['name'])){
                            $u=$_SESSION['name'];
                            echo "  <a class=\"btn gradient-bg animate-right\" style='color: white'>$u</a>";
                        }

                        else {
                            echo "   <a class=\"btn gradient-bg animate-right\" href=\"login/login.php\">Login</a>";
                        }
                        ?>
                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div id="about" class="page-header events-news-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title animate-left">ABOUT US</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <article class="events-news-post">
                <header class="entry-header">
                    <h2 class="entry-title animate-bottom"><a href="index.php"><p style="font-size: 2.1em">Magical Touch Events</p></a></h2>

                    <div class="entry-meta flex align-items-center">
                        <div class="posted-author animate-left"><a><p style="font-size: 2em">Where events turn into celebrations</p></a></div>
                    </div>
                </header>

                <figure>
                    <!--<a href="#"><img src="images/about-1.jpg" alt=""></a>-->
                    <video width="1146" height="482" controls class="animate-left">
                        <source src="images/about.mp4" type="video/mp4">
                    </video>
                </figure>

                <div class="entry-content">
                    <p>Our team guarantees a professional service from the moment we start planning your event to
                        the finish. Our aim is always to surpass our clients’ expectations and this is the Magical Touch
                        on which we judge ourselves.
                        <br>
                        Magical Touch is the Magical standard in events, bringing discerning customers the very highest
                        levels of professionalism and event excellence. We work closely with all our customers creating
                        events that are flawlessly planned, beautifully delivered and surpass all expectations</p>
                    </p>

                    <pre>



                    </pre>
                </div>
            </article>
        </div>
    </div>
</div>
<div style="background-image:url(images/upcoming-events-bg.jpg) ">
    <pre>










            </pre>
    <div class="row">
        <div  class="next-events-section-header">
            <h2 style="color: white; margin-left: 550px" class="entry-title">Find Us</h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="contact-location-details" >
                    <h2 style="color: white" class="entry-title">RAMALLAH</h2>
                    <footer class="entry-footer">
                        <ul>
                            <li style="color: white" class="contact-address">Manarah Square</li>
                            <li style="color: white" class="contact-number">0922665 5667</li>
                        </ul>
                    </footer>
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-4">
                <div class="contact-location-details">
                    <h2 style="color: white" class="entry-title">JENIN</h2>
                    <footer class="entry-footer">
                        <ul>
                            <li style="color: white" class="contact-address">Martyrs' Square roundabout</li>
                            <li style="color: white" class="contact-number">0924665 5667</li>
                        </ul>
                    </footer>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="contact-location-details">
                    <h2 style="color: white" class="entry-title">TULKARM</h2>
                    <footer class="entry-footer">
                        <ul>
                            <li style="color: white" class="contact-address">Thabet Thabet square</li>
                            <li style="color: white" class="contact-number">0923665 5667</li>
                        </ul>
                    </footer>
                </div>
            </div>
            <pre>






            </pre>
        </div>
    </div>
</div>
<div class="contact-page-map">
    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=rafidia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>
<div id="contact" class="newsletter-subscribe">
    <div class="container">
        <div class="row">
            <div  style="margin-top: 0em;margin-bottom: 0em" class="next-events-section-header">
                <h2 style="color: white; margin-left: 450px" class="entry-title">CONTACT US</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="contact-form" >
                    <form class="row" action="send%20message.php" method="post">
                        <div style="margin-bottom: 1em" class="col-12 col-md-4"><input type="text" placeholder="Name" name="mname"></div>
                        <div style="margin-bottom: 1em" class="col-12 col-md-4"><input type="email" placeholder="E-mail" name="memail"></div>
                        <div style="margin-bottom: 1em" class="col-12 col-md-4"><input type="text" placeholder="Subject" name="subject"></div>
                        <div style="margin-left: 0.5em" class="col-12"><textarea placeholder="Message" rows="8" name="message"></textarea></div>
                        <div class="col-12 flex justify-content-center"><input class="btn gradient-bg" type="submit" value="Send Message"></div>
                    </form>
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
                    <a href="#"><img src="images/logo.png" alt="logo"></a>
                </figure>

                <nav class="footer-navigation">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#about">About us</a></li>
                        <li><a href="Team.html">Team</a></li>
                        <li><a href="#">services</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>

                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.

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