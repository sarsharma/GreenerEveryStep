<?php
#database config

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '1234');
define('DB_NAME', 'JPBHeUjzfq');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_select_db($con, DB_NAME);

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
