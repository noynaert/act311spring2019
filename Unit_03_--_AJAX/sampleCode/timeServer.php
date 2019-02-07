<?php

date_default_timezone_set('America/Chicago');
$t=time();
$timeString = date("l, Y-m-d h:m:s a e",$t).' timezone';
echo "$timeString";
  
?>