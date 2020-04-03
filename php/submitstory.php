<?php
session_start();
require_once "config.php";

mysqli_select_db($con, DB_NAME);
$title=$_POST["storytitle"];
$content=$_POST["content"];
$userid=$_SESSION["id"];



$target_dir = "../images/storyimages/";
$target_file = $target_dir . basename($_FILES["storyimage"]["name"]);
$data = addslashes(file_get_contents($_FILES['storyimage']['tmp_name']));
#echo $data;
move_uploaded_file($_FILES["storyimage"]["tmp_name"], $target_file);

$query2="insert into 'imgtest' values ('$data');";

$query = "INSERT INTO `stories`(`userid`,  `title`, `content`) VALUES ('$userid', '$title', '$content');";

if (!mysqli_query($con, $query)) {
    echo "Error: " . mysqli_error($con);
}
mysqli_query($con, $query2);
#echo "$title, $content, $userid";
mysqli_close($con);

echo "Story Uploaded Sent, Redirecting to Main Page..";

#header("Refresh: 3; URL=../stories.php");

?>