<?php

//fetch the data
$url = "http://quotes.rest/qod.json";
$data = file_get_contents($url);

//echo the data we got as a single string
echo $data;