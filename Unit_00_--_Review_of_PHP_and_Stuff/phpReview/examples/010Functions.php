<?php

function greet($name){
    echo "<p>Hello, $name!</p>";
}

function sum($a, $b){
    $result = $a + $b;
    return $result;
}

function printSum($a, $b){
    $result = sum($a, $b);
    echo "<p>The sum of $a plus $b is $result</p>";
}


greet("Fred");
$name = "Betty";
echo "The name is $name<br/>";

$c = sum(5, 3);
echo "<p>The sum of 5 plus 3 is $c</p>";

printSum(6, 4);

$a = 3;
$b = 4;
printSum($a, $b);
printSum($b, $a);
printSum("barney", '5');
printSum("2", '3');
