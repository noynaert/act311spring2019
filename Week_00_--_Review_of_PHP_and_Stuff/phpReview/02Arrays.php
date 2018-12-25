<?php
function printArray($list){
    $n = sizeof($list);
    echo "<h2>There are $n items on the list</h2>";

    echo '<ul>';
    foreach($list as $item){
        echo "<li>$item</li>";
    }
    echo '</ul>';
}

$states[0] = "Missouri";
$states[1] = "Kansas";
$states[2] = "Iowa";
$states[3] = "Illinois";
$states[4] = "South Dakota";
array_push($states, "North Dakota");
array_push($states,"Colorado");

for($i = 0; $i < sizeof($states); $i++){
    echo "Item $i is $states[$i]<br/>";
}

printArray($states);

$cities = array("Saint Joseph", "Cameron", "Maryville", "Elwood", "Kansas City");
printArray($cities);