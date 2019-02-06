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

function makeTable($states){
    echo "<table border=\"1\">";
    echo '<tr><th>State</th><th>Nickname</th><th>Capital</th><th>Population</th></tr>';
    foreach($states as $state){
        $fields = explode(":",$state);
        echo '<tr>';
        foreach($fields as $field){
            echo "<td>";
            echo "$field";
            echo '</td>';
        }
        echo '</tr>';
    }
    echo "</table>";

}

$states = getStates("data/states.txt");
makeList($states);
makeTable($states);

echo '<p>DONE</p>';