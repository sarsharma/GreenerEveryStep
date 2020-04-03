<?php
session_start();
require_once "config.php";

mysqli_select_db($con, DB_NAME);

$title=$_POST["storytitle"];
$content=$_POST["content"];
$userid=$_SESSION["id"];

$result = mysqli_query($con, "select now()");
while ($row = mysqli_fetch_row($result)) {
    $ts = $row[0];
}
//$ts holds timestamp


if (isset($_POST['upload'])) {
    $image = $_FILES['storyimage']['name'];


    // image file directory
    $target = "../images/storyimages/";
    #$target_file = $target.basename($_FILES["storyimage"]["name"]);
    //storing image name renamed as timestamp
    $temp = explode(".", $_FILES["storyimage"]["name"]);
    $target_file = $target.$ts . '.' . end($temp);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $image = $_FILES['storyimage']['name'];

    
    $check = getimagesize($_FILES["storyimage"]["tmp_name"]);
    if ($check !== false) {
        #echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image. ";
        $uploadOk = 0;
    }


    // Check file size
    if ($_FILES["storyimage"]["size"] > 1000000) {
        echo " File size too large ";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        
    ) {
        echo "Only JPG, JPEG, PNG  files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo " Your file was not uploaded. ";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["storyimage"]["tmp_name"], $target_file)) {
            #echo "The file " . basename($_FILES["storyimage"]["name"]) . " has been uploaded.";
            $query = "INSERT INTO `stories`(`userid`, `title`, `content`, `time`, `image`) VALUES ('$userid', '$title', '$content', '$ts', '$image')";
           if(!mysqli_query($con , $query)){
               echo $con->error;
           }
        } else {
            echo "Sorry, there was an error uploading";
        }
    }
}






echo "Story Uploaded, Redirecting to Main Page..";

header("Refresh: 3; URL=../index.php");

?>