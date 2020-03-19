<?php 
include 'class.php';
$reply = new Message();
$qReply = new QuickReply();
$qReply->text = "Please select";
$qReply->quick_replies[] = new Title("Number 1", new Attribute("1"));
$qReply->quick_replies[] = new Title("Number 2", new Attribute("2"));
$qReply->quick_reply_options = new QuickReplyOption(false,"user_message");
$reply->messages[] = $qReply;
echo json_encode($reply); 
http_response_code(200);
 ?>