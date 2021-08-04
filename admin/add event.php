<!DOCTYPE html>
<html lang="en">
<head>

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


    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body class="elements-page">

<header class="site-header">
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <a href="#"><img src="images/logo.png" alt="logo"></a>
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
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>

                    </nav><!-- .site-navigation -->
                </div><!-- .col -->

                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">
                        <a class="btn gradient-bg" href="#">Admin</a>
                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="page-header elements-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Admin.</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->

<div class="container">


    <div class="row elements-wrap">
        <div class="col-12">


            <div class="entry-content elements-container">
                <div class="row">


                    <div class="col-12 col-md-6">
                        <div class="tabs">



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row elements-wrap">
        <div class="col-12">
            <header class="entry-header elements-heading">
                <h2 class="entry-title" id="percentage">Percentage</h2>
            </header>

            <div class="entry-content elements-container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="circular-progress-bar">
                            <div class="circle" id="festivals">
                                <strong></strong>
                            </div>

                            <h3 class="entry-title">WEDDING</h3>
                            <p>Maecenas id ultrices</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                        <div class="circular-progress-bar">
                            <div class="circle" id="concerts">
                                <strong></strong>

                            </div>

                            <h3 class="entry-title">CORPORATE</h3>
                            <p>Sancenas diultrices</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="circular-progress-bar">
                            <div class="circle" id="conference">
                                <strong></strong>
                            </div>

                            <h3 class="entry-title">PRIVATE</h3>
                            <p>Maecenas id ultrices</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="circular-progress-bar">
                            <div class="circle" id="new_artists">
                                <strong></strong>
                            </div>

                            <h3 class="entry-title">New artists</h3>
                            <p>Sancenas diultrices</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row elements-wrap">
        <div class="col-12">
            <header class="entry-header elements-heading">
                <h2 class="entry-title">Services</h2>
            </header>
            <div class="entry-content elements-container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="counter-box">
                            <div class="flex justify-content-center align-items-center">
                                <img src="images/mic-icon.png" alt="">
                            </div>

                            <div class="entry-content">
                                <?php
                                @ $db = new mysqli('localhost', 'root', '', 'events');
                                if (mysqli_connect_errno()) {
                                    echo 'Error: Could not connect to database. Please try again later.';
                                    exit;
                                }
                                // ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- add to database
                                $query = "SELECT  events.events.type FROM events.events where events.events.type='PRIVATE'";
                                $result = $db->query($query);
                                $num_results = $result->num_rows;
                                echo "<div class=\"start-counter\" data-to=$num_results data-speed='2000'>5555</div>";
                                $db->close();
                                ?>
                                <h3 class="entry-title">PRIVATE</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="counter-box">
                            <div class="flex justify-content-center align-items-center">
                                <img src="images/bulb-icon.png" alt="">
                            </div>

                            <div class="entry-content">
                                <?php
                                @ $db = new mysqli('localhost', 'root', '', 'events');
                                if (mysqli_connect_errno()) {
                                    echo 'Error: Could not connect to database. Please try again later.';
                                    exit;
                                }
                                // ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- add to database
                                $query = "SELECT  events.events.type FROM events.events where events.events.type='CORPORATE'";
                                $result = $db->query($query);
                                $num_results = $result->num_rows;
                                echo "<div class=\"start-counter\" data-to=$num_results data-speed='2000'>5555</div>";
                                $db->close();
                                ?>



                                <h3 class="entry-title">CORPORATE</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="counter-box">
                            <div class="flex justify-content-center align-items-center">
                                <img src="images/diomond-icon.png" alt="">
                            </div>

                            <div class="entry-content">
                                <?php
                                @ $db = new mysqli('localhost', 'root', '', 'events');
                                if (mysqli_connect_errno()) {
                                    echo 'Error: Could not connect to database. Please try again later.';
                                    exit;
                                }
                                // ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- add to database
                                $query = "SELECT  events.events.type FROM events.events where events.events.type='WEDDING'";
                                $result = $db->query($query);
                                $num_results = $result->num_rows;
                                echo "<div class=\"start-counter\" data-to=$num_results data-speed='2000'>5555</div>";
                                $db->close();
                                ?>


                                <h3 class="entry-title">WEDDING</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="counter-box">
                            <div class="flex justify-content-center align-items-center">
                                <img src="images/calendar-icon.png" alt="">
                            </div>

                            <div class="entry-content">
                                <?php
                                @ $db = new mysqli('localhost', 'root', '', 'events');
                                if (mysqli_connect_errno()) {
                                    echo 'Error: Could not connect to database. Please try again later.';
                                    exit;
                                }
                                // ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- add to database
                                $query = "SELECT  events.events.type FROM events.events where events.events.type='Others'";
                                $result = $db->query($query);
                                $num_results = $result->num_rows;
                                echo "<div class=\"start-counter\" data-to=$num_results data-speed='2000'>5555</div>";
                                $db->close();
                                ?>

                                <h3 class="entry-title">Others</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="limiter">
        <div class="container-table100" style="background-color: white">

            <div class="wrap-table100" style="background-color: white">

                <div class="table100 ver6 m-b-110">
                    <table data-vertable="ver6">
                        <thead>
                        <tr class="row100 head">
                            <th class="column100 column1" data-column="column1" style="color: black ; font-size: large">Events</th>
                            <th class="column100 column2" data-column="column2">Email</th>
                            <th class="column100 column3" data-column="column3">Phone</th>
                            <th class="column100 column4" data-column="column4">city</th>
                            <th class="column100 column5" data-column="column5">Event type</th>
                            <th class="column100 column6" data-column="column6">Event date</th>
                            <th class="column100 column7" data-column="column7">Guests</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        @ $db = new mysqli('localhost', 'root', '', 'test');
                        if (mysqli_connect_errno()) {
                            echo 'Error: Could not connect to database. Please try again later.';
                            exit;
                        }
                        // ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- add to database
                        $query = "SELECT * FROM events.events ";
                        $result = $db->query($query);
                        if($result->num_rows<1) echo "no data";
                        $num_results = $result->num_rows;
                        for ($i=0; $i <$num_results; $i++) {
                            $row=$result->fetch_row();
                            echo "<tr class='row100'>";
                            echo "<td class='column100'> $row[0]  $row[1]</td>";
                            echo "<td class='column100'> $row[2]</td>";
                            echo "<td class='column100'> $row[3]</td>";
                            echo "<td class='column100'> $row[4]</td>";
                            echo "<td class='column100'> $row[5]</td>";
                            echo "<td class='column100'> $row[6]</td>";
                            echo "<td class='column100'> $row[7]</td>";
                            echo "<tr>";

                        }
                        $db->close();
                        ?>
                        </tbody>
                    </table>
                </div>
                <div class="table100 ver6 m-b-110">
                    <table data-vertable="ver6">
                        <thead>
                        <tr class="row100 head">
                            <th class="column100 column1" data-column="column1" style="color: black ; font-size: large">Users</th>
                            <th class="column100 column2" data-column="column2">Birth Date</th>
                            <th class="column100 column3" data-column="column3">Email</th>
                            <th class="column100 column4" data-column="column4">Address</th>


                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        @ $db = new mysqli('localhost', 'root', '', 'test');
                        if (mysqli_connect_errno()) {
                            echo 'Error: Could not connect to database. Please try again later.';
                            exit;
                        }
                        // ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- add to database
                        $query = "SELECT * FROM events.users ";
                        $result = $db->query($query);
                        if($result->num_rows<1) echo "no data";
                        $num_results = $result->num_rows;
                        for ($i=0; $i <$num_results; $i++) {
                            $row=$result->fetch_row();
                            echo "<tr class='row100'>";
                            echo "<td class='column100'> $row[0] </td>";
                            echo "<td class='column100'> $row[1]</td>";
                            echo "<td class='column100'> $row[2]</td>";
                            echo "<td class='column100'> $row[3]</td>";

                            echo "<tr>";

                        }
                        $db->close();
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="row elements-wrap">
        <div class="col-12">
            <header class="entry-header elements-heading">
                <h2 class="entry-title">Icon Boxes</h2>
            </header>

            <div class="entry-content elements-container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="icon-box">
                            <div class="flex justify-content-between align-items-center">
                                <figure>
                                    <img src="images/icon-1.png" alt="">
                                </figure>

                                <header class="entry-header">
                                    <h3 class="entry-title">Ultra Music Miami</h3>

                                    <div class="date">Saturday <span>Jan 27, 2018</span></div>
                                </header>
                            </div>

                            <div class="entry-content">
                                <p>Lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facili.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="icon-box">
                            <div class="flex justify-content-between align-items-center">
                                <figure>
                                    <img src="images/icon-2.png" alt="">
                                </figure>

                                <header class="entry-header">
                                    <h3 class="entry-title">Dance & Music</h3>

                                    <div class="date">Saturday <span>Jan 27, 2018</span></div>
                                </header>
                            </div>

                            <div class="entry-content">
                                <p>Lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facili.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="icon-box">
                            <div class="flex justify-content-between align-items-center">
                                <figure>
                                    <img src="images/icon-3.png" alt="">
                                </figure>

                                <header class="entry-header">
                                    <h3 class="entry-title">Online Conference</h3>

                                    <div class="date">Saturday <span>Jan 27, 2018</span></div>
                                </header>
                            </div>

                            <div class="entry-content">
                                <p>Lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facili.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>


<div style="height: 120px"></div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="footer-logo">
                    <a href="#"><img src="images/logo.png" alt="logo"></a>
                </figure>

                <nav class="footer-navigation">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
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

</body>
</html>