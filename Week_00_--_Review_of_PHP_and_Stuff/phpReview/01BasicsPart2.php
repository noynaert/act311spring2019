<?php
function sum($a, $b){
   $c = $a + $b;
   return $c;
}

function printSum($a, $b, $result){
    echo "The sum of $a and $b is $result<br>";
}

$result = sum(3, 5);
echo "The sum of 3 and 5 is $result<br/>";

$x = 735;
$y = 750;
$z = sum($x, $y);
echo "The sum of $x and $y is $z<br/>";

$a = "hot";
$b = "dog";
$z = sum($a, $b);
echo "The sum of $a and $b is $z<br/>";

$a = "6";
$b = '56';
$z = sum($a, $b);
echo "The sum of $a and $b is $z<br/>";


printSum($a, $b, $z);

$x = true;
$y = true;
$z = sum($x, $y);
printSum($x, $y, $z);