<?php
function getData($queryString){

    //Step 1, make a connection
    $host = 'turing.cs.missouriwestern.edu';
    $user = 'act211';
    $password = 'rem105';
    $database = 'misc';
    $states = array();

    $conn = mysqli_connect($host, $user, $password, $database);
    if($conn){
        echo 'Connection to database was successful<br/>';
    }else{
        echo 'Connection to database FAILED<br/>';
    }

    if($conn){
        $result = mysqli_query($conn, $queryString);
        if($result){
            while($record = mysqli_fetch_assoc($result)){
                array_push($states, $record);
            }
        }
    }

    //Step 3, close the database
    mysqli_close($conn);

    return $states;
}

function printStates($states){
      echo '<table border="1"';
      echo '<tr><th>State</th><th>Nickname</th><th>Capital</th><th>Population</th></tr>';
      foreach($states as $oneState){
          $stateName = $oneState['state'];
          $nickname = $oneState['nickname'];
          $capital = $oneState['capital_city'];
          $population = number_format($oneState['population'],0,'.',',');
          $website = $oneState['website'];
          echo '<tr>';
          echo "<td><a href=\"$website\">$stateName</a></td>";
          echo "<td>$nickname</td>";
          echo "<td>$capital</td>";
          echo "<td align=\"right\">$population</td>";
          echo '</tr>';
      }
      echo '</table>';
}

$queryString = 'SELECT state, nickname, capital_city, population, website FROM states ORDER BY capital_city';
$states = getData($queryString);
printStates($states);