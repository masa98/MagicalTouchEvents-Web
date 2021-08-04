<?php

$target_dir = "uploads/";
$target_file = basename($_FILES["profile_photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$user=  $_SESSION['upload'];

$pic=$_POST['uploade'];
@ $db = new mysqli('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database. Please try again later.';
    exit;
}
// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- add to database
$query = "UPDATE events.users SET `pic`='".$pic."' WHERE name ='".  $user."' ";
$result = $db->query($query);
header("location:action_page.php")
?>