<?php
session_start();
if(isset($_POST['username2'])){
    if(empty($_POST['username2'])  ){

        header("location:sign up.php");
    }
    if(empty( $_POST['password2'])){
        header("location:sign up.php");
    }
    else{
        $u=$_POST['username2'];
        $p=$_POST['password2'];
        $e=$_POST['email'];
        $a=$_POST['address'];
        $b=$_POST['birthdate'];
        $phone=$_POST['phone'];
        @ $db = new mysqli('localhost', 'root', '', 'test');
        if (mysqli_connect_errno()) {
            echo 'Error: Could not connect to database. Please try again later.';
            exit;
        }
// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- add to database
        $query = "INSERT INTO events.users(`name`, `username`, `password`, `birthdate`, `email`, `address`,`phone`,`pic`) VALUES ('".$u."','".$u."','".$p."','".$b."','".$e."','".$a."','".$phone."','profile.png')";
        $result = $db->query($query);
        if(isset($_SESSION['omar'])){
            echo "<br>";
            echo "value is ".$_SESSION['omar'];
        }
        header("location:../login/login.php");
        $db->close();
    }
}
else {
    $_SESSION['exist']="username is exist";
    header("location:sign up.php");

}
?>

