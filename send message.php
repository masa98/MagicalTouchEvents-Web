<?php
session_start();
if(isset($_POST['memail'])){
    if(empty($_POST['memail'])  ){
  echo "hi";
//        header("location:About us.php");
    }
    if(empty( $_POST['message'])){
//        header("location:About us.php");
        echo "hi";

    }
    else{
        $u=$_POST['mname'];
        $p=$_POST['memail'];
        $e=$_POST['subject'];
        $a=$_POST['message'];
        @ $db = new mysqli('localhost', 'root', '', 'test');
        if (mysqli_connect_errno()) {
            echo 'Error: Could not connect to database. Please try again later.';
            exit;
        }
// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- add to database
        $query = "INSERT INTO events.message(`name`, `email`, `subject`, `message`) VALUES ('".$u."','".$p."','".$e."','".$a."')";
        $result = $db->query($query);
        $_SESSION['message']="done";
        header("location:About us.php");
        $db->close();
    }
}
else {
    $_SESSION['exist']="username is exist";
    header("location:About us.php");

}
?>

