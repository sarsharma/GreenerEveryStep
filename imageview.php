<?php
require_once "php/config.php";

if (isset($_GET['time'])) {
	$sql = "SELECT image FROM stories WHERE time='".$_GET['time']."'";
	$result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($con));
	$row = mysqli_fetch_array($result);
	#header("Content-type: " . $row["imageType"]);
	echo $row["image"];

}
mysqli_close($con);

?>

