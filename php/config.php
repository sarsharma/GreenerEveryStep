<?php
#database config

define('DB_SERVER', 'remotemysql.com:3306');
define('DB_USERNAME', 'JPBHeUjzfq');
define('DB_PASSWORD', 'h01WPRgTp9');
define('DB_NAME', 'JPBHeUjzfq');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_select_db($con, DB_NAME);

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
