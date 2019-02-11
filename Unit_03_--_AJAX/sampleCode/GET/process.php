<?php
//Should santitize the $_GET array to prevent injection!
foreach($_GET as $k => $v){
    echo "[$k] is $v<br>";
}