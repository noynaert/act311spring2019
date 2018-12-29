<?php

//MODEL
function getData($queryString){

    //Step 1, make a connection
    $host = 'turing.cs.missouriwestern.edu';
    $user = 'act211';
    $password = 'rem105';
    $database = 'misc';
    $states = array();

    $conn = mysqli_connect($host, $user, $password, $database);

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
//VIEW
function printStates($states){
      echo '<table class="table-striped"';
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
