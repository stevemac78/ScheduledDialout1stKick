<?php
// Enable CORS
header("Access-Control-Allow-Origin: *");

// API URL to proxy
$url = "https://pop2-apps.mycontactcenter.net/API/v3/dialer/entry" . $_SERVER['QUERY_STRING'];

// Perform the API request
$response = file_get_contents($url);

// Forward the API response as JSON
header('Content-Type: application/json');
echo $response;
?>
