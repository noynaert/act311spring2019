<?php
//setup
require_once('process.php');
$baseurl = 'https://newsapi.org/v2/top-headlines?country=us';

$url = "$baseurl&apiKey=$newsAPIkey";
//echo $url;

//job1 -- Fetch the data from the remote server
$data = file_get_contents($url); 

//job2 -- echo the data
echo $data;
