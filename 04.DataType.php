<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //boolean
    $is_married=true;
    var_dump($is_married);
     echo "<br>";
    //floating point
    $temp=98.6;
    var_dump($temp);
    echo "<br>";
    ?>
    <?php

    $txt="The introduction of PHP";
    ECHO "Welcome to ".$txt." !";
    echo "<br/>";
    echo "Integer Max Value : ".PHP_INT_MAX;
    echo "<br>";
    $speed=504.789;
    echo $speed;
    echo "<br>";
    //cast to integer
    $newSpeed=(integer)$speed;
    echo $newSpeed;
    echo "<br>";
    $data=2.5;
    echo gettype($data);
    ?>
</body>
</html>