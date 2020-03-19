<?php
include 'class.php'; 
header("Access-Control-Allow-Origin: *");
$reply = new Message();
$reply->messages[] = new Text("Hi {{first name}}!");
$reply->messages[] = new Text("How can i help u :3");
echo json_encode($reply);
http_response_code(200);
?>