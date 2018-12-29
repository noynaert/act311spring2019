<?php
function getStates($fileName){
    $states = file($fileName)  or die("Could not get file $fileName<br/>");
    return $states;
}

function makeList($lines){
    echo "<hr/><ul>";
    foreach($lines as $state){
        echo "<li>$state</li>";
    }
    echo "</ul>";
}

function doList($lines){
    echo "<hr/><ul>";
    foreach($lines as $state){
        $fields = explode(":",$state);
        echo "<li>$fields[2], $fields[0]</li>";
    }
    echo "</ul>";
}

$states = getStates("data/states.txt");
makeList($states);
doList($states);

echo '<p>DONE</p>';