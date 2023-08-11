<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Simulate a response for testing
$response = array("status" => "success", "message" => "This is a test response");
echo json_encode($response);
?>
