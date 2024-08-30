<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
    
<h1>Conversion results</h1>

<!-- HERE WE USE SUPER GLOBAL VARIABLES TO RETRIEVE THE VALUES PASSED IN THE FORM BY INDEX.HTML -->

<?php

$amount = $_GET["amount"];
$crypto = $_GET["crypto"];

echo "The amount of $amount in $crypto equals to 400 dollars";

?>

</body>
</html>