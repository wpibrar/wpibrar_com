<?php


$secret = '!C91@Ui*w&9F6'; // Replace with your secret key

$headers = getallheaders();
$signature = isset($headers['X-Hub-Signature']) ? $headers['X-Hub-Signature'] : '';
$body = file_get_contents('php://input');

if (!verify_signature($secret, $signature, $body)) {
    http_response_code(401);
    exit('Unauthorized');
}

// Pull the changes from GitHub
exec('git pull');