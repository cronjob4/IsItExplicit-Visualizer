<?php


include 'key.php';

$searchTerm = "adele hello";

// API Call URL
$baseURL = ("https://isitexplic.it/api?apikey=" . $apiKey . "&search=" . $searchTerm);


//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL, $baseURL);
// Execute
$result = curl_exec($ch);
// Closing
curl_close($ch);

$jsonData = json_decode($result);


//print_r($jsonData->trackData);
//Get from cURL JSON -> trackData -> name

$songName = $jsonData->trackData->name;
$artist = $jsonData->trackData->artist;
$uniqueProfanityCount = $jsonData->explicitData->uniqueProfanityCount;
$profanities = $jsonData->explicitData->profanities;
$occurences = $jsonData->explicitData->occurences;

//$songName = $jsonData->trackData->name;



?>