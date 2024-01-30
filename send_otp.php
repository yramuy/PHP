<?php

require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

// Twilio credentials
$accountSid = 'AC5801d3baebbaef345085f50cad6a4c38';
$authToken  = '855d72c649d5eac5d361bf10d374f3be';
$twilioNumber = '+12512801976';

// Your recipient's phone number (e.g., +1234567890)
$recipientNumber = '+917729070810';

// Generate a random 6-digit OTP
$otp = mt_rand(100000, 999999);

// Store the OTP in a session or database for verification later
// For example, you can use $_SESSION['otp'] = $otp;

// Twilio API client
$client = new Client($accountSid, $authToken);

// Twilio message body
$messageBody = "Your OTP is: $otp";

try {
    // Send SMS using Twilio
    $message = $client->messages->create(
        $recipientNumber,
        [
            'from' => $twilioNumber,
            'body' => $messageBody,
        ]
    );

    // Output success message
    echo "OTP sent successfully to $recipientNumber.";
} catch (Exception $e) {
    // Handle errors
    echo "Error: " . $e->getMessage();
}
