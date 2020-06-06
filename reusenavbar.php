<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>


<head>
    <title>Greener Every Step</title>
    <link rel="icon" href="images/mainicon.jpeg" type="image/icon type" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/loginstyle.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="images/mainicon.jpeg" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Greener Every Step</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">


                    <a class="nav-link" href=<?php
                                                if (!isset($_SESSION["loggedin"])) {
                                                    echo "php/login.php";
                                                }?>>

                        <?php

                        if (isset($_SESSION["loggedin"])) {
                            echo "Hello ";
                            echo $_SESSION["username"];
                            echo " !";
                        } else {
                            echo "Login";
                        }
                        ?>
                    </a>
                <li class="nav-item">
                    <a href="php/logout.php" class="nav-link" <?php
                                                                        if (!isset($_SESSION["loggedin"])) {

                                                                            echo "hidden";
                                                                        }                                                                        
                                                                    
                    ?>>Logout</a>
                </li>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="stories.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Stories
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="stories.php">Read stories</a>
                        <a class="dropdown-item" href="<?php
                                                        if (isset($_SESSION["loggedin"])) {
                                                            echo "writestory.php";
                                                        } else {
                                                            echo "php/login.php";
                                                        } ?>">Write your own</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="contactus.php">Contact Us</a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>
</body>

</html>