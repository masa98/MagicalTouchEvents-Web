<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>
</head>
<body>
    <?php
$password=$_POST['password'];
    $con =mysqli_connect('localhost','root','','events');
    $query ="select * from users where username='".$name."' and password='".$password."'";
$result=$con->query($query);
    $row = $result->num_rows;
    if($row==1) {
echo 'Logged in';
    }
    else{
        echo 'Not logged in';
    }
    if(!$con)
{
    die("Connection failed:" . $con->connect_error);
}

  ?>
</body>
</html>