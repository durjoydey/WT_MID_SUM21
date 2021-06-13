<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 3</title>
</head>
<body>
    <?php
    $length = 14;
    $width = 15;
    function rectangle()
    {
        global $length;
        global $width;
        $rectanglePerimeter =2*($length+$width);
        $rectangleArea= ($length*$width);

        echo "Perimeter:$rectanglePerimeter <br>";
        echo "Area: $rectangleArea<br>";
        if($length == $width)
        {
            echo "the shape is a square";
        }
    }
    rectangle();
    ?>
</body>
</html>