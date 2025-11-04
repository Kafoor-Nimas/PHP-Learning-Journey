<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Variables in PHP</title>
</head>
<body>
    <h1>Variables in PHP</h1>
    <?php 
    $name='Joe';
    ?>
    <h3>Welcome to <?php echo $name ?>'s Blog!</h3>
    <?php 
    /*Destroying variable
    unset($name);
    echo $name;
    */

    $name="Joes";
    $age=23;
    $height=171.5;
    //display variable contents
    var_dump($name);
    var_dump($age);
    var_dump($height);

    ?>
</body>
</html>