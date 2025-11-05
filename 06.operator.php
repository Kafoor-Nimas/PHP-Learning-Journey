<?php
//Identity
$a="10";
echo "<br>".gettype($a);
$a=+"10";
echo "<br>".gettype($a);
#Negation
$a=40;
echo "<br> A Value : ".$a;
echo "<br> A Value : ".-$a;

# Comparison Operator
echo "<br>";
$a=45;
$b="45";
var_dump($a==$b);
echo "<br>";
var_dump($a===$b);
echo "<br>";
var_dump($a!=$b);
echo "<br>", var_dump($a<>$b) ;
echo "<br>";
echo "<br>", var_dump($a!==$b) ;

//Spaceship
$a=5;
$b=25;
echo "<br>", var_dump($a<=>$b) ;


?>