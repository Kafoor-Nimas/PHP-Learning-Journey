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
echo "<br>";
echo "<br>";
# Logical Operator

$eng=75;
$mat=98;
$sci=82;
echo "<br>", var_dump($eng>=35 and $mat>=35 and $sci>=35);
echo "<br>", var_dump($eng>=35 or $mat>=35 or $sci>=35);
echo "<br>", var_dump($eng>=35 && $mat>=35 && $sci>=35);
echo "<br>", var_dump($eng>=35 || $mat>=35 || $sci>=35);
echo "<br/><br/>" , var_dump(!$eng>=35)




?>