<?php
// Enable CORS
header("Access-Control-Allow-Origin: *");

// API URL to proxy
$url = "https://pop2-apps.mycontactcenter.net/API/v3/dialer/entry" . $_SERVER['QUERY_STRING'];

// Perform the API request
$response = file_get_contents($url);

// Return the API response to the client
echo $response;
?>
