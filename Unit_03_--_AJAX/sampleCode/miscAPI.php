<?php
//misc. api
require('utility.php');

$fields = null;
$table = null;
$where = null;
$limit = 0;

if( isset($_GET['fields']) ){
    $fields = htmlspecialchars($_GET['fields']);
}
if ( isset($_GET['table']) ){
    $table=htmlspecialchars($_GET['table']);
}

if( isset($_GET['where'])){
    $where = $_GET['where'];
}






$qString = "SELECT $fields FROM $table";
if($where){
    $qString = "$qstring WHERE $where";
}
//fetch the data
$data = getData($qString);

//return the json string
echo json_encode($data);
