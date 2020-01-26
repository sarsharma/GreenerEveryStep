<?php


$con=mysqli_connect('localhost', 'root', '1234');

if($con){
echo "Connection Successful";


}

else
{
echo "Connection Failed";

}

mysqli_select_db($con, 'testdb');

$username=$_POST['name'];
$email=$_POST['email'];

//echo  "$email";

$query="INSERT INTO `users`(`username`, `email`) VALUES ('$username', '$email');";

mysqli_query($con, $query);



?>

