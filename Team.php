<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    ?>
    <title>TEAM | Magical Touch</title>
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


    }
</style>
<body class="events-list-page">
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
                            <li><a href="About%20Us.php">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#contact">Contact</a></li>
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
                            echo "  <a class=\"btn gradient-bg animate-left\" style='color: white'>$u</a>";
                        }

                        else {
                            echo "   <a class=\"btn gradient-bg animate-left\" href=\"login/login.php\">Login</a>";
                        }
                        ?>
                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div id="team" class="page-header events-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">TEAM</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->

<pre>



</pre>

<div class="container">
    <div class="row events-list">
        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/event-1.jpg" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title"><a>KATIE TOWNE</a></h2>
                        <div class="event-date">While earning her degree in Management at Colorado State University, Katie discovered her love
                            for event planning while helping many of her friends plan weddings of their own. Katie took that love and worked
                            at a local wedding venue in Fort Collins, as event staff, where she has the opportunity to set-up and work a wide
                            variety of weddings. That experience eventually brought her to Pink Diamond Events, where she has been since 2013.
                            Working with Pink Diamond Events has given her a great opportunity to show her creative abilities in every detail
                            of the wedding! Her favorite part about weddings? “Getting to see details that are truly unique and individual to
                            the Bride and Groom’s relationship. Whether it’s a unique part of the ceremony, a custom decor item or a clever party favor, I love it all!”
                        </div>
                    </div>
                </header>

                <footer class="entry-footer">
                    <a target=" _blank" href="https://www.facebook.com/katie.towne.9">Contact Katie.</a>
                </footer>
            </div>
        </div>

        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/event-4.jpg" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title">JACK ROBIRT</h2>
                        <div class="event-date">Jack has been coordinating with Magical Touch Events since 2010 and
                            has been in the hospitality industry for over 9. His diverse background brings a
                            creative design and flawless execution to each and every wedding. With his unique taste
                            and imaginative vision he can put an artistic twist on any theme! Let his obsession with
                            detail ensure that each element of your event will be executed to perfection.
                            His outgoing personality has done its fair share to connect him with some of the best
                            vendors in the industry. This connection will be passed on directly to you, making
                            certain you have the best and right team behind you for your big day!</div>
                    </div>
                </header>

                <footer class="entry-footer">
                    <a target=" _blank" href="https://www.facebook.com/jack.robert.90226">Contact Jack</a>
                </footer>
            </div>
        </div>

        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <img src="images/event-3.jpg" alt="">
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title"><a>ANABELLE LOR</a></h2>
                        <div class="event-date">Anabelle’s love for organization and details started at a very young age. Her mom said she use to come
                            out of her room as a young girl dressed and accessorized all in one color and she refused to have it any other way.
                            She use to rearrange her room multiple times just because it was fun for her to decorate and reorganize everything.
                            This love continued on as she grew up. After getting her bachelors degree from the University of Northern Colorado,
                            Jen and her husband Chad moved to Florida for a fun change of pace. Jen started working with a linen rental company
                            helping brides put that extra special detail into their big day. While networking with area planners,
                            Jen began working as an assistant wedding planner for a local company in the Tampa Bay area. This eventually led to
                            obtaining a position as the Catering Sales Manager at a destination resort on St. Pete Beach, FL, where she would help
                            couples plan and prepare every detail of their upcoming wedding. After spending 5 years in Florida, Jen and Chad decided
                            it was time to move back to Colorado, which brought Jen to Pink Diamond Events in 2016.</div>
                    </div>
                </header>

                <footer class="entry-footer">
                    <a target="_blank" href="https://www.facebook.com/anabelle.lorenzo.9">Contact Anabelle.</a>
                </footer>
            </div>
        </div>


        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/event-5.jpg" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title">CASEY MULLER</h2>
                        <div class="event-date">I am a wife, a strong woman entrepreneur and a skilled wedding planner. I love enjoying a glass of Red
                            Zinfandel paired with gourmet cheese, snowboarding and camping in the beautiful Colorado Mountains with my best friend
                            (my husband!) and my dog Milhouse! I am addicted to home design reality TV and Starbucks Carmel Macchiato! I am easy going,
                            fun, ambitious, driven and organized– these characteristics also describe my planning style.As your planner and friend,
                            we’re always there to calmly guide you through the planning of your big day so that you won’t feel overwhelmed or alone in
                            this substantial task. We believe that our role as the wedding planners is to create a wedding that shows what is special
                            about the both of you.The success of my wedding planning business really amounts to us fulfilling the expectations of our
                            clients. We’re so fortunate and grateful to have helped so many couples achieve the goal of a beautiful and stress-free wedding.</div>
                    </div>
                </header>

                <footer class="entry-footer">
                    <a target=" _blank" href="https://www.facebook.com/casey.muller.1441">Contact Casey</a>
                </footer>
            </div>
        </div>
        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/event-2.jpg" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title">MEGAN PIERCE</h2>
                        <div class="event-date">Megan has been coordinating with Pink Diamond Events since 2010 and has been in the hospitality
                            industry for over 9. Her diverse background brings a creative design and flawless execution to each and every wedding.
                            With her unique taste and imaginative vision she can put an artistic twist on any theme! Let her obsession with detail
                            ensure that each element of your event will be executed to perfection. Her outgoing personality has done its fair share
                            to connect her with some of the best vendors in the industry. This connection will be passed on directly to you, making
                            certain you have the best and right team behind you for your big day!
                        </div>
                    </div>
                </header>
                <footer class="entry-footer">
                    <a  target=" _blank" href="https://www.facebook.com/megan.pierce.7359">Contact Megan</a>
                </footer>
            </div>
        </div>

        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/event-6.jpg" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title">MICHAEL SMITH</h2>
                        <div class="event-date">Regardless of how many events MICHAEL has planned, he still gets excited for his favorite parts
                            of the day. It’s always special watching the first look between bride and groom, the first dance, and of course,
                            seeing all the details finally come together perfectly! When he isn’t planning weddings, MICHAEL enjoys spending time
                            with his wife, 2 kids and dog, drinking coffee, running and enjoy the outdoors. Can’t wait to meet you!
                        </div>
                    </div>
                </header>
                <footer class="entry-footer">
                    <a href="https://www.facebook.com/zombiefeet">Contact MICHAEL</a>
                </footer>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="load-more-btn">
                <a class="btn gradient-bg" href="#">Book Your Event</a>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="newsletter-subscribe">

    <div class="container">
        <header class="entry-header">
            <h1 class="entry-title">Contact Us</h1>
        </header>
        <div class="row">
            <div class="col-12">
                <div class="contact-form">
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
                    <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                </figure>

                <nav class="footer-navigation">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="About%20Us.php">About us</a></li>
                        <li><a href="Team.php">Team</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
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
    </div></footer>

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