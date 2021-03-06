<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up | Magical Touch</title>
    <link rel="icon" href="../images/next-events-header-bg.png">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image: url(images/4.jpg)">
<div class="main">
    <div class="container">
        <div><img src="../images/events-news-bg.jpg"></div>
        <form method="POST" class="appointment-form" id="appointment-form" action="fake.php">
            <h2>Sign up</h2>
            <div class="form-group-1">
                <input type="text" name="username2" id="username2" placeholder="User Name" required />
                <input type="date" name="birthdate" id="birthdate" required>
                <input type="number" name="phone" id="phone" placeholder="phone" required>
                <input type="text" name="address" id="address" placeholder="Address" required />
                <input type="email" name="email" id="email" placeholder="Email Address" required />
                <input type="password" name="password2" id="password2" placeholder="Password" required />
            </div>
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