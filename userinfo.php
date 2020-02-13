<?php


$con=mysqli_connect('remotemysql.com:3306', 'JPBHeUjzfq', 'h01WPRgTp9');

if($con){
echo "Connection Successful";


}

else
{
echo "Connection Failed";

}

/*

mysqli_select_db($con, 'JPBHeUjzfq');

$username=$_POST['existingusername'];
$email=$_POST['existingpassword'];

echo  "$email";

*/
mysqli_select_db($con, 'JPBHeUjzfq');

$username=$_POST['existingusername'];
$password=$_POST['existingpassword'];

$query="INSERT INTO `userlogin`(`username`, `password`) VALUES ('$username', '$password');";

mysqli_query($con, $query);

echo "Inserted";

?>

