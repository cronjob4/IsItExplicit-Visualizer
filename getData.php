<?php

include 'key.php';

$showProfanities = $_GET["showProfanities"];

// API Call URL
$baseURL = ("https://isitexplic.it/api?apikey=" . $apiKey . "&search=" . $searchTerm);


// CURL FUNCTION- DON'T ASK... IDK EITHER :/

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


// SET ALL VARIABLES FROM CURL

$songName             = $jsonData->trackData->name;
$artist               = $jsonData->trackData->artist;
$uniqueProfanityCount = $jsonData->explicitData->uniqueProfanityCount;
$profanities          = $jsonData->explicitData->profanities;
$profanitiesHidden    = $jsonData->explicitData->profanitiesHidden;

$occurrences = $jsonData->explicitData->occurrences;


// FORMAT OCCURENCES INTO A GRAPH-READABLE STRING

function formatOccurrences($occurrences)
{
    $formatted = "";
    
    // echo("");
    for ($i = 0; $i < sizeof($occurrences); $i++) {
        
        $formatted .= ("" . $occurrences[$i] . ", ");
        
    }
    return $formatted;
    
}

// FORMAT PROFANITIES INTO A GRAPH-READABLE STRING

function formatProfanities($profanities)
{
    
    $formatted = "";
    
    // echo("");
    for ($i = 0; $i < sizeof($profanities); $i++) {
        
        $formatted .= ('"' . $profanities[$i] . '", ');
        
        
    }
    return $formatted;
    
}

// SHOW OR HIDE PROFANITIES

$occurenceList = formatOccurrences($occurrences);


if ($showProfanities == "on") {
    
    $profanityList = formatProfanities($profanities);
    
} else {
    
    $profanityList = formatProfanities($profanitiesHidden);
    
    
}


?>