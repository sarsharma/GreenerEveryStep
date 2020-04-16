<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body background="images/highres/bright-countryside-dawn-daylight-302804.jpg">
    <nav>
        <div id="header">
            <script>
                $(function() {
                    $('#header').load('reusenavbar.php');

                });
            </script>

        </div>
    </nav>
   
    <div class="container mt-4 rounded" style="background-color: #ffffff">

        <section class="my-2">
            <div class="py-2">
                <h3 class="text-center">Write your own stories!</h3>
            </div>
        </section>
        <form action="php/submitstory.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="storytitle">Title for story(Upto 20 words max)</label>

                <input type="text" name="storytitle" class="form-control col-8" maxlength="200" style="resize: none; ">
            
            </div>
            <label for="content" class="form-check-label">Story Content</label>
            <textarea name="content" class="form-control" rows="10" style="resize: none; "></textarea>
            <label for="storyimage" class="form-text">Image for story</label>
            <input type="file" name="storyimage" id="storyimage" class="form-control-file">

            <button type="submit" class="btn btn-primary my-4" name="upload">Submit</button>

    </div>

</body>

</html>