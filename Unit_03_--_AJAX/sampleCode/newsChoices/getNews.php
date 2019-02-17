<?php
//setup
require_once('process.php');
$headlineurl = 'https://newsapi.org/v2/top-headlines?country=us';
$keywordurl = 'https://newsapi.org/v2/everything?q=';
$baseurl = '';

//fetch the parameter if there is one, otherwise use headlines;
if(isset($_GET['term'])){
    $term = $_GET['term'];
    $term = htmlspecialchars($term);
    $term = urlencode($term);
    $baseurl = $keywordurl.$term;
}else{
    $baseurl = $headlineurl;
}

$url = "$baseurl&apiKey=$newsAPIkey";

//job1 -- Fetch the data from the remote server
$data = file_get_contents($url); 

//job2 -- echo the data
echo $data;


//https://newsapi.org/v2/everything?q=