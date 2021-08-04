<?php
session_start();
if(isset($_POST['username'])){
    if(empty($_POST['username'])  ){

        header("location:sign up.php");
    }
    if(empty( $_POST['password'])){
        header("location:sign up.php");
    }
    else{
        $u=$_POST['username'];
        $p=$_POST['password'];
        $e=$_POST['email'];
        $a=$_POST['address'];
        $b=$_POST['birthdate'];
        @ $db = new mysqli('localhost', 'root', '', 'test');
        if (mysqli_connect_errno()) {
            echo 'Error: Could not connect to database. Please try again later.';
            exit;
        }
// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- add to database
        $query = "INSERT INTO events.users(`name`, `username`, `password`, `birthdate`, `email`, `address`) VALUES ('".$u."','".$u."','".$p."','".$b."','".$e."','".$a."')";
        $result = $db->query($query);
        echo "done";
        if(isset($_SESSION['omar'])){
            echo "<br>";
            echo "value is ".$_SESSION['omar'];
        }
        $db->close();
    }
}
else {
    header("location:sign up.php");
}
?>

