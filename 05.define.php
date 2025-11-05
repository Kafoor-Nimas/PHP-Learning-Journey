<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constand</title>
</head>
<body>
    <?php

    define("program","PHP");
    define("version","8.2");
    define("NAMES",["Ram","Sam","Zara"]);
    echo "Welcome to ".program." Version (".version.")";
    echo "<br> Name: ".NAMES[2];
    ?>
</body>
</html>