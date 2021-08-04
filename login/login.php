
<!DOCTYPE html>
<html lang="en" >
<?php
session_start();
$_SESSION['usernamee']=1;
//if(isset($_SESSION['not login'])) {
//    echo "<script type='text/javascript'>alert('you are not sign in , sign in please !!');</script>";
//}
?>
<head>
    <meta charset="UTF-8">
    <title>Login | Magical Touch</title>
    <link rel="icon" href="../images/next-events-header-bg.png">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <link rel="stylesheet" href="css/style.css">

</head>
<script>
    $('.login').on('submit', function(e) {
        e.preventDefault();
        $('.login').removeClass('clicked').addClass('loading');
    });

</script>
<body style="background-image: url(../images/header-bg.jpg);" >
<div class="login">
    <header class="header">
        <span class="text" style="font-family: inherit">LOGIN</span>
        <span class="loader"></span>
    </header>
    <form  action="../index.php" method="post">
        <input class="input" type="text" placeholder="Username" name="username" required>
        <input class="input" type="password" placeholder="Password" name="password" required>
        <button class="btn" type="submit" ></button>
    </form>

</div>
<div >
    <h3 align="center" style="font-family: inherit;padding-top:35%;color: #f8d7da">
        Don't have an account?<a href="../signup/sign%20up.php"style="color: #f8d7da"><b>Sign up</b></a>
    </h3>

    <a href="#" style="color: #f8d7da">
        <h3 align="center" style="font-family: inherit;padding-top:1% ">
            <u>Forgot Password?</u>
        </h3>
    </a>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



<script  src="js/index.js"></script>




</body>

</html>
