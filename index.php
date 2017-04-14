<?php


include 'key.php';

$searchTerm = "adele hello"

// API Call URL
$baseURL = ("https://isitexplic.it/api?apikey=" .
$apiKey . "&search=" . $searchTerm);


//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL, $baseURL);
// Execute
$result = curl_exec($ch);
// Closing
curl_close($ch);


print_r(json_decode($result));


?>