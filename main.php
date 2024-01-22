<?php

require_once 'vendor/autoload.php'; // Assuming Guzzle is installed via Composer

use GuzzleHttp\Client;

// Replace with your actual API key
$apiKey = 'YOUR_API_KEY';

// Specify the path to the image you want to enhance
$imagePath = 'path/to/your/image.jpg';

// Encode the image data
$imageData = file_get_contents($imagePath);
$base64Image = base64_encode($imageData);
$imageMd5 = base64_encode(md5($imageData, true));

// Construct the request
$client = new Client();
$url = 'https://api.remini.ai/v1/tasks';
$headers = [
    'Authorization' => 'Bearer ' . $apiKey,
    'Content-Type' => 'application/json',
];
$body = [
    'tools' => [
        [
            'type' => 'face_enhance',
            'mode' => 'beautify'
        ],
        [
            'type' => 'background_enhance',
            'mode' => 'base'
        ]
    ],
    'image_md5' => $imageMd5,
    'image_content_type' => 'image/jpeg', // Adjust based on image format
    'output_content_type' => 'image/jpeg', // Adjust if desired
];

// Send the request
try {
    $response = $client->post($url, [
        'headers' => $headers,
        'json' => $body,
    ]);

    // Process the response
    $responseData = json_decode($response->getBody(), true);
    $taskId = $responseData['task_id'];

    // Track the task status and download the enhanced image (refer to Remini API documentation for details)

} catch (Exception $e) {
    // Handle errors gracefully
    echo "Error: " . $e->getMessage();
}
