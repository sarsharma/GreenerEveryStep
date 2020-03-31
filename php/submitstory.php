<?php
session_start();
require_once "config.php";

mysqli_select_db($con, DB_NAME);
$title=$_POST["storytitle"];
$content=$_POST["content"];
$userid=$_SESSION["id"];


$query = "INSERT INTO `stories`(`userid`,  `title`, `content`) VALUES ('$userid', '$title', '$content');";

if (!mysqli_query($con, $query)) {
    echo "Error: " . mysqli_error($con);
}

#echo "$title, $content, $userid";
mysqli_close($con);

echo "Story Uploaded Sent, Redirecting to Main Page..";

header("Refresh: 3; URL=../stories.php");

?>