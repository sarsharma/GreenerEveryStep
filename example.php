<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $count=5;
        while($var=$count){
            $count=$count-1;
        }
    ?>
    <p>
        <?php
            echo $var;
        ?>
    </p>
</body>
</html>