<?php
session_start();
if (isset($_POST['fname'])){
        @ $db = new mysqli('localhost', 'root', '', 'test');
        if (mysqli_connect_errno()) {
            echo 'Error: Could not connect to database. Please try again later.';
            exit;
        }
// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- add to database '".$f."','".$l."','".$e."',,'".$p."''".$c."','".$ev."','".$c."','".$g."'
        $query = "INSERT INTO events.events(`firstname`, `lastname`, `email`, `phone`, `location`, `type`,`Start`,`end`,`guests`,`title`,`username`) VALUES ('".$_POST['fname']."','".$_POST['Lname']."','".$_POST['email']."','".$_POST['phone_number']."','".$_POST['city']."','".$_POST['event_type']."', '".$_POST['startdate']."', '".$_POST['enddate']."','".$_POST['guest_num']."', '".$_POST['tilte']."', '".$_POST['fname']."')";
        $result = $db->query($query);
      echo "".$_POST['fname']."','".$_POST['Lname']."','".$_POST['email']."','".$_POST['phone_number']."','".$_POST['city']."','".$_POST['event_type']."', '".$_POST['startdate']."', '".$_POST['enddate']."','".$_POST['guest_num']."', '".$_POST['tilte']."', '".$_POST['fname']."'";
//        var_dump($result);
        if($db->affected_rows==1) {
                echo "done";

        }
        else{
                echo "no";
        }
//                header("location :../index.php");
//        }
//        header("location:../login/login.php");
        $db->close();
}
else{
//        header('location :book.php');
        echo "Sign in first !!!";
}

?>

