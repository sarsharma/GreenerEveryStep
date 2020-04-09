<?php
#database config

define('DB_SERVER', 'remotemysql.com:3306');
define('DB_USERNAME', 'JPBHeUjzfq');
define('DB_PASSWORD', 'h01WPRgTp9');
define('DB_NAME', 'JPBHeUjzfq');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_select_db($conn, DB_NAME);

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>