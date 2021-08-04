<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<?php
session_start();
if(!isset($_SESSION['us'])){
    header("location:../login/login.php");
}
?>
<head>
    <title>Hello World</title>

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
<body class="single-event-page">
<header class="site-header">
    <div id="head" class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <a href="#"><img src="../images/logo1.png" alt="logo"></a>
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
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="../About%20Us.php">About us</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="../Team.php">Team</a></li>
                            <li><a href="#head">profile</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->

                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">
                        <button class="btn gradient-bg" onclick="<?php session_destroy();?>" "><a href="../index.php">Log out</a> </button>
                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="page-header single-event-page-header">
        <div class="container">
            <div class="row profile"> <?php
                $conn = mysqli_connect("localhost", "root", "","events");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $username1=$_SESSION['us'];

                $disp=mysqli_query($conn,"select * from events.users where username='".$username1."' ");//edittttttttt
                while ($result = mysqli_fetch_array($disp,MYSQLI_ASSOC)) {
                ?>
                <img  alt="" src="../images/<?php echo $result['pic'];?>" style="width: 17%;height: 17%; border-radius: 50%;">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="contact-location-details" >
                        <footer class="entry-footer" style="margin-left: 0">
                            <ul>
                                    <p><h1 class="entry-title" style="color: white;"><?php echo $result['name'];?></h1></p>
                                    <li style="color: white" class="contact-birth"><?php echo $result['birthdate'];?></li>
                                    <li style="color: white" class="contact-address"><?php echo $result['address'];?></li>
                                    <li style="color: white" class="contact-email"><?php echo $result['email'];?></li>
                                    <li style="color: white" class="contact-number"><?php echo $result['phone'];?></li>
                            </ul>
                            <form action="upload.php" method="post">
                                <input type="file" name="uploade" accept="image/png">
                                <button type="submit" >Change Pic</button>
                            </form>
                                <?php
                                }
                                ?>


                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-12 single-event event-content-wrap ">
            <h2 class="entry-title"><u>Previous Events</u></h2>
        </div>
    </div>
</div>
<?php
$conn = mysqli_connect("localhost", "root", "","events");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//$email=$_POST[Email];
$now = date_create('now')->format('Y-m-d H:i:s');
$disp=mysqli_query($conn,"select * from event where username='".$username1."' ");//edittttttttt

while ($result = mysqli_fetch_array($disp,MYSQLI_ASSOC) ) {
    if($now<$result['end'])
       continue;
?>
<div class="container">
    <div class="row">
        <div class="col-12 single-event">
            <div class="event-content-wrap">
                <header class="entry-header flex flex-wrap justify-content-between align-items-end">
                    <div class="single-event-heading">
                        <h2 class="entry-title"><?php echo $result['title'] ?></h2>
                        <div class="event-location"><a href="#"><?php echo $result['location'] ?></a>
                        </div>

                        <div class="event-date"><?php echo $result['Start']?></div>
                    </div>

                    <div class="buy-tickets flex justify-content-center align-items-center">
                        <a class="btn gradient-bg" href="../Booking/book.php">Book New One</a>
                    </div>
                </header>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="tabs">
                <ul class="tabs-nav flex">
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_details">
                        Details
                    </li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">
                        Organizers
                    </li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_venue">FeedBack
                    </li>

                </ul>

                <div class="tabs-container">
                    <div id="tab_details" class="tab-content">
                        <div class="flex flex-wrap justify-content-between">
                            <div class="single-event-details">
                                <div class="single-event-details-row">
                                    <label>Start:</label>
                                    <p><?php echo $result['Start']?></p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>End:</label>
                                    <p><?php echo $result['end']?></p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>Location:</label>
                                    <p><?php echo $result['location']?></p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>Contact Phone:</label>
                                    <p><?php echo $result['phone']?></p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>Estimated Guests Number:</label>
                                    <p><?php echo $result['guests']?></p>
                                </div>
                            </div>

                            <div class="single-event-map">
                                <iframe id="gmap_canvas"
                                src="https://maps.google.com/maps?q=<?php echo $result['location']?>&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>

                    <div id="tab_venue" class="tab-content">
                        <form>
                        <p>Please give us your notice:</p>
                            <textarea cols="130" rows="10" name="feedback"></textarea>
<!--                            <a class="btn gradient-bg" href="" style="margin-top: 1em" onclick=function feed()>Submit</a>-->
                    </div>

                    <div id="tab_organizers" class="tab-content">
                        <p>The day-to-day management of the Hall is the responsibility of the Chief Executive who is accountable
                            to the Council for all aspects of the Hall’s operations. He is supported by Directors as below.</p>
                        <p style="font-size: 1em">SENIOR EXECUTIVES:</p>
                        <ul>
                            <li><b>Sara Crema</b>
                                <br>Director of Buildings and Operations</li>
                            <li><b>Louise Halliday</b>
                                <br>Director of External Affairs</li>
                            <li><b>Lucy Noble</b>
                                <br>Artistic and Commercial Director</li>
                            <li><b>Anthony Winter-Brown</b>
                                <br>Director of Visitor Experience</li>
                            <li><b>Anupam Ganguli</b>
                                <br>Director of Finance and Administration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>

    <?php
    $conn = mysqli_connect("localhost", "root", "","events");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //$email=$_POST[Email];
    $now = date_create('now')->format('Y-m-d H:i:s');
    $disp=mysqli_query($conn,"select * from event where username='".$username1."'");//edittttttttt

    while ($result = mysqli_fetch_array($disp,MYSQLI_ASSOC) ) {
    if($now>$result['end'])
        continue;
    ?>
    <div class="row">
        <div class="col-12">
            <div class="upcoming-events">
                <div class="upcoming-events-header">
                    <h4>Upcoming Events</h4>
                </div>

                <div class="upcoming-events-list">
                    <div class="upcoming-event-wrap flex flex-wrap justify-content-between align-items-center">
                        <figure class="events-thumbnail">
                            <a href="#"><img src="../images/upcoming-events.jpg" alt=""></a>
                        </figure>

                        <div class="entry-meta">
                            <div class="event-date">
                                <?php $date=$result['Start'] ;
                                $dt = new DateTime($date);
                                echo $dt->format('d');
                                ?>
                                <span>
                                    <?php
                                switch ($dt->format('m')) {
                                    case "01":
                                        echo "Jan";
                                        break;
                                    case "02":
                                        echo "Feb";
                                        break;
                                    case "03":
                                        echo "Mar";
                                        break;
                                    case "04":
                                        echo "Apr";
                                        break;
                                    case "05":
                                        echo "May";
                                        break;
                                    case "06":
                                        echo "Jun";
                                        break;
                                    case "07":
                                        echo "Jul";
                                        break;
                                    case "08":
                                        echo "Aug";
                                        break;
                                    case "09":
                                        echo "Sep";
                                        break;
                                    case "10":
                                        echo "Oct";
                                        break;
                                    case "11":
                                        echo "Nov";
                                        break;
                                    case "12":
                                        echo "Dec";
                                        break;
                                }
                                    ;?></span>
                            </div>
                        </div>

                        <header class="entry-header">
                            <h3 class="entry-title"><?php echo $result['title'] ?></h3>

                            <div class="event-date-time"><?php echo $result['Start'] ?></div>

                            <div class="event-speaker"><?php echo $result['location'] ?></div>
                        </header>

                    </div>
                </div>
            </div><?php
            }
            ?>
        </div>
    </div>
</div>

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