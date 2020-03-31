<?php

require_once "config.php";

mysqli_select_db($con, DB_NAME);


$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];



$query="INSERT INTO `contactform`( `name`, `email`, `subject`, `message`) VALUES ('$name', '$email' , '$subject' , '$message');";

echo(mysqli_query($con, $query));


echo "Message Sent, Redirecting to Main Page..";

header("Refresh: 3; URL=../index.php"); 




?>

