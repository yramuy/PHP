<?php 
require_once ('vendor/autoload.php'); // if you use Composer
//require_once('ultramsg.class.php'); // if you download ultramsg.class.php
    
$token="ofxs1h2fn1ao6ut8"; // Ultramsg.com token
$instance_id="instance76277"; // Ultramsg.com instance id
$client = new UltraMsg\WhatsAppApi($token,$instance_id);
    
$to="+917729070810"; 

// $body="Hello world welcome"; 
// $api=$client->sendChatMessage($to,$body);

// $caption="image Caption"; 
// $image="https://file-example.s3-accelerate.amazonaws.com/images/test.jpg"; 
// $api=$client->sendImageMessage($to,$image,$caption);

$filename="image Caption";
$document="https://file-example.s3-accelerate.amazonaws.com/documents/cv.pdf"; 
$api=$client->sendDocumentMessage($to,$filename,$document);

print_r($api);
?>