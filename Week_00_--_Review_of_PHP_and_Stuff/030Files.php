<?php

function getFile($fileName){
    $lines = file($fileName) or die("Could not get file $fileName<br/>");
    return $lines;
}

$states = getFile("data/states.txt");

echo "The first state is $states[0]<br/>";
echo "The 25th state is $states[24]<br/>";