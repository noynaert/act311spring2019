<?php

function getStates($fileName){
    $states = file($fileName) or die("Could not get file $fileName<br/>");
    return $states;
}

function makeList($lines){
    echo "<ul>";
    foreach($lines as $state){
        echo "<li>$state</li>";
    }
    echo "</ul>";
}

function makeTable($rows){
    echo "<table border=\"1\">";
    //make the header row
    echo "<tr><th>State</th><th>Nickname</th><th>Capital City</th><th>Population</th></tr>";

    foreach($rows as $row){  //creating a row
        echo "<tr>";
        $fields = explode(":",$row);
        foreach($fields as $column){  //creating a cell in the row
            echo "<td>$column</td>";
        }
        echo "</tr>";
    }


    echo "</table>";

}

$states = getStates("data/states.txt");

$n = sizeof($states);
echo "There are $n lines of data in the file<br/>";
//echo "The first line in the file is $states[0]<br/>";


makeTable($states);

makeList($states);