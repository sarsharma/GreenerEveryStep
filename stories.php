<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body>

    <nav>
        <div id="header">
            <script>
                $(function() {
                    $('#header').load('reusenavbar.php');

                });
            </script>

        </div>
    </nav>

    <div class="container">
        <div>
            <h2 class="my-3 text-center">Read awesome Stories!</h2>
            <div class="justify-content-right text-right">
                <form action="#" method="post">
                    Sort By:
                    <select name="sort_option" id="">
                        <option value="desc" <?php
                                                if ($_SESSION["sort_option"] == "asc") {
                                                    echo "selected";
                                                }

                                                ?>>Newest</option>
                        <option value="asc" <?php
                                            if ($_SESSION["sort_option"] == "desc") {
                                                echo "selected";
                                            }

                                            ?>>Oldest</option>
                    </select>
                    <button class="btn btn-secondary">Go</button>

                </form>

            </div>
        </div>
        <?php

        require_once "php/config.php";
        mysqli_select_db($con, DB_NAME);
        #$reader_userid = $_SESSION["id"];

        $_SESSION["sort_option"] = "desc"; //by default descending sort

        if (isset($_POST["sort_option"])) {
            $_SESSION["sort_option"] = $_POST["sort_option"];   //updating according to user choice
        }

        # echo $_SESSION["sort_option"];

        //find story count
        $query = "select count(*) as cnt from stories";
        $result = $con->query($query);
        $row = mysqli_fetch_assoc($result);
        $total_rows = $row['cnt'];


        $stories_per_page = 2;



        $query = "select * from stories order by time " . $_SESSION["sort_option"];

        $result = $con->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $username_query = "select username from users where id=" . $row["userid"];
                $query_result = mysqli_query($con, $username_query);

                while ($res = mysqli_fetch_row($query_result)) {
                    $username = $res[0];
                }

                #echo "Story by: " . $username .  "Title " . $row["title"] .  "Content" . $row["content"] . "time " . $row["time"] . "<br>";



        ?>
                <div class="shadow rounded border my-5">
                    <H3 class="text-center mt-3 mb-2"><?php echo $row['title']; ?></H3>
                    <p class="px-3">By <?php echo $username; ?> </p>

                    <p class="px-3"><?php echo $row['time']; ?></p>
                    <div class="justify-content-center text-center">
                        <img src="imageview.php?time=<?php echo $row["time"]; ?> " height="300" />
                    </div>

                    <p class="mx-1 pt-4 pb-2 px-3"><?php echo $row['content']; ?></p>

                    <p class="px-3">Comments:</p>

                    <p>
                        <?php
                        if(isset($_POST['comment']))
                            echo $_POST['storyid'];
                        ?>
                    </p>

                    <form action="#" class="px-3">
                        Write a comment: <input type="text" class="form-control" name="comment" id="">
                        <input type="hidden" name="storyid" value=<?php  echo $row['storyid'] ?>>
                        <button class="btn btn-primary">Post</button>
                    </form>



                </div>

        <?php
            }
        }
        mysqli_close($con);
        ?>

    </div>
