<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <?php
        require_once "php/config.php";
    $sql = "SELECT * FROM stories"; 
    $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {
        ?>
            
            <img src="imageview.php?time=<?php echo $row["time"]; ?> " width="400" height="200" /><br />

        <?php

        }
        mysqli_close($con);
        ?>

    </div>
</body>

</html>