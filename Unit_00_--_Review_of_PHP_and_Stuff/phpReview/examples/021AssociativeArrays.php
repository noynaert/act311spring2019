<?php

$captains["Kirk"] = "images/kirk.jpg";
$captains["Picard"] = "images/picard.jpg";
$captains["Janeway"] = "images/janeway.jpg";
$captains["Sisco"] = "https://webservices.missouriwestern.edu/users/noynaert/phpReview/images/sisco.jpg";
$captains["Kirk (as portrayed by Christopher Pike)"] = "https://webservices.missouriwestern.edu/users/noynaert/phpReview/images/youngkirk.jpg";


foreach ($captains as $key => $value){
    echo "Captain $key whose picture may be found at $value<br/>";
}

ksort($captains);

foreach($captains as $name => $image){
    echo "<h1>Captain $name</h1>";
    echo "<p><img src=\"$image\" alt=\"Captain $name\"/></p>";
}