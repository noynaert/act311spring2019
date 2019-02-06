<?php

function printBackgrounds($pictures){
    echo '<ul>';
        foreach($pictures as $image){
            echo "<li>$image</li>";
        }
    echo '</ul><hr/>';
}


$backgrounds[0] = "enterpriseBridge.jpg";
$backgrounds[1] = "quarks.jpg";
$backgrounds[2] = "brickStairs.jpg";
$backgrounds[3] = "christmasTree.jpg";
array_push($backgrounds, "ocean.jpg");
array_push($backgrounds, "window.jpg");

$n = sizeof($backgrounds);
sort($backgrounds);

printBackgrounds($backgrounds);


for($i = 0; $i<$n; $i++ ){
    echo "$i $backgrounds[$i]<br/>";
}