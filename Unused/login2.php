<?php

require_once "config.php";

mysqli_select_db($con, DB_NAME);

$username=$_POST['existingusername'];
$password=$_POST['existingpassword'];


$query="INSERT INTO `userlogin`(`username`, `password`) VALUES ('$username', '$password');";

mysqli_query($con, $query);

echo "Inserted";

?>

