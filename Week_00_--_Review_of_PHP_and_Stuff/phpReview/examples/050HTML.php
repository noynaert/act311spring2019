<?php require_once "050modelAndView.php"; ?>

<!DOCTYPE html>
<html>
<!-- Bootstrap from CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
<head>
    <style>
       body {left-margin:2em;}
    </style>
<title>States of the United States</title>
</head>
<body>
<h1>States of the United States</h1>

<?php
//CONTROLLER
$queryString = 'SELECT state, nickname, capital_city, population, website FROM states ORDER BY capital_city';
$states = getData($queryString);
printStates($states);
?>
<div id="lastUpdate">
<script>
    let lastModifiedTime = new Date (document.lastModified);
    document.write("<p>Last Modified: "+lastModifiedTime+"</p>");
</script>
</div>
</body>
</html>