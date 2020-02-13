<?php


$con=mysqli_connect('remotemysql.com:3306', 'JPBHeUjzfq', 'h01WPRgTp9');


mysqli_select_db($con, 'JPBHeUjzfq');

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];



$query="INSERT INTO `contactform`( `name`, `email`, `subject`, `message`) VALUES ('$name', '$email' , '$subject' , '$message');";

mysqli_query($con, $query);

echo "Message Sent";

?>

