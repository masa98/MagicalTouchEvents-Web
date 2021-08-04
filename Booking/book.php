<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(isset($_SESSION['usernamee'])){
//    header("location:../login/login.php");
}
else{
    header("location:../login/login.php");
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book | Magical Touch</title>
    <link rel="icon" href="../images/next-events-header-bg.png">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image: url(../images/booking2.jpg)">
<div class="main">
    <div class="container">
        <div><img src="../images/events-news-bg.jpg"></div>
        <form method="POST" class="appointment-form" id="appointment-form" action="send%20data.php" >
            <h2>Book Your Event</h2>
            <div class="form-group-1">
                <input type="text" name="fname" id="fname" placeholder="First Name" required />
                <input type="text" name="Lname" id="Lname" placeholder="Last Name" required />
                <input type="email" name="email" id="email" placeholder="Email Address" required />
                <input type="number" name="phone_number" id="phone_number" placeholder="Phone number" required />
                <div class="select-list">
                    <select name="city" id="city">
                        <option class="pink" slected value="">City</option>
                        <option class="pink" value="Nablus">Nablus</option>
                        <option class="pink" value="Rammallah">Rammallah</option>
                        <option class="pink" value="Jenin">Jenin</option>
                        <option class="pink" value="Tullkarm">Tullkarm</option>
                        <option class="pink" value="qalqilya">qalqilya</option>
                        <option class="pink" value="Bethlehem">Bethlehem</option>
                    </select>
                </div>
                <div class="select-list">
                    <select name="event_type" id="event_type">
                        <option slected value="">Type of Event</option>
                        <option value="Wedding">Wedding</option>
                        <option value="Private">Private</option>
                        <option value="corporate">corporate</option>
                    </select>
                </div>
              <h4 style=" font-style: italic;color: #0b0b0b " >Starting Date of Event</h4>  <input type="datetime-local" name="startdate" id="date" placeholder="Starting Date of Event" required>
                <h4 style=" font-style: italic;color: #0b0b0b " >Ending Date of Event</h4> <input type="datetime-local" name="enddate" id="date" placeholder="Ending Date of Event" required>
                <input type="text" name="tilte" id="date" placeholder="Titile" required>
            </div>
            <input type="number" name="guest_num" id="guest_num" placeholder="Estimated Number of Guests" required />
            <div class="form-check">
                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
            </div>
            <div class="form-submit">
                <input type="submit" name="submit" id="submit" class="submit" value="Send" />
            </div>
        </form>
    </div>

</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>