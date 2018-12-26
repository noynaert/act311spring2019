<?php

$captains["Kirk"] = "https://webservices.missouriwestern.edu/users/noynaert/phpReview/images/kirk.jpg";
$captains["Picard"] = "https://webservices.missouriwestern.edu/users/noynaert/phpReview/images/pickard.jpg";
$captains["Janeway"] = "https://webservices.missouriwestern.edu/users/noynaert/phpReview/images/janeway.jpg";
$captains["Sisco"] = "images/sisco.jpg";
$captains["kirk"] = "https://webservices.missouriwestern.edu/users/noynaert/phpReview/images/youngkirk.jpg";

ksort($captains);

foreach($captains as $key => $value){
    echo "Captain $key whose picture may be found at $value<br/>";
}

foreach($captains as $name => $url){
    echo "\n<h2>$name</h2>";
    echo "<p><img src=\"$url\" alt=\"Captain $url\"></p>";
}