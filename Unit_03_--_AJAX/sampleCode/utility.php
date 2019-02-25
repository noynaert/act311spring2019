<?php
function getData($queryString){

    //Step 1, make a connection
    $host = 'noynaert.cs.missouriwestern.edu';
    $user = 'act311';
    $password = 'age124';
    $database = 'misc';
    $data = array();

    $conn = mysqli_connect($host, $user, $password, $database);
    if(!$conn){
        echo 'Connection to database FAILED<br/>';
    }

    if($conn){
        $result = mysqli_query($conn, $queryString);
        if($result){
            while($record = mysqli_fetch_assoc($result)){
                array_push($data, $record);
            }
        }
    }

    //Step 3, close the database
    mysqli_close($conn);

    return $data;
}