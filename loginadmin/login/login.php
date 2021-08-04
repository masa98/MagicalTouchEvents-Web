
<!DOCTYPE html>
<html lang="en" >
<?php
if(isset($_SESSION['not login'])) {
    echo "<script type='text/javascript'>alert('you are not sign in , sign in please !!');</script>";
}
?>
<head>
    <meta charset="UTF-8">
    <title>Login | Magical Touch</title>

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



<div class="login">
    <header class="header">
        <span class="text" style="font-family: inherit">LOGIN</span>
        <span class="loader"></span>
    </header>
    <form  action="../../admin/admin.php" method="post">
        <input class="input" type="text" placeholder="Username" name="Ausername" required>
        <input class="input" type="password" placeholder="Password" name="Apassword" required>
        <button class="btn" type="submit" ></button>
    </form>

</div>
<div >
    <h3 align="center" style="font-family: inherit;padding-top:35%;color: #7B059797">
        Admin
    </h3>


</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



<script  src="js/index.js"></script>




</body>

</html>
