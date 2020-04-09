<?php
session_start();
require_once "config.php";

mysqli_select_db($con, DB_NAME);
$query = "SELECT image FROM stories WHERE time=" . $_GET['time'];
$result=$con->query($query);
$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["imageType"]);
        echo $row["imageData"];