<?php
$api_url = "https://jsonplaceholder.typicode.com/posts"; 

$ch = curl_init($api_url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Process the API response
if ($response) {
    $products = json_decode($response, true); // Assuming the response is in JSON format
    // Display or process the list of products as needed
    print_r($products);
} else {
    echo 'Failed to fetch products from the API.';
}
?>
