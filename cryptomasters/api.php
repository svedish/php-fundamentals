<?php

include("classes.php");

//Export a JSON application to the client
header("Content-type: application/json");
// Allow anyone to consume the API
header("Access-Control-Allow-Origin: * ");

$code = $_GET['code'] ?? 'BTC';
$converter = new CryptoConverter($code);
$rateInUSD = $converter->convert();
echo "{ \"rate\": $rateInUSD }";

