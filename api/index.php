<?php

$access_token = "EAADl7p3EviUBAH3aFW4k933PVdNzWZCkB2ievsGDZC6f8j2ECNOkSVhxzPZAiyq2swQsY7ZAyjaLXflBkkLgzPU1jgZCnOtHC2yv3bAbRccdpMkgGu0bXdCsvOn1MyvCGj1ySgobZAAID7XZBb7Qta9FHoBGq3ucr82eU5Qtye00SO507vMsZBev";
$hubVerifyToken = "fb_time_bot";

// check token at setup
if ($_REQUEST['hub_verify_token'] === $hubVerifyToken) {
    echo $_REQUEST['hub_challenge'];
    exit;
}

if ($_REQUEST) {
    var_dump($_REQUEST); 
    exit;
}
// // handle bot's anwser
// $input = json_decode(file_get_contents('php://input'), true);
// $senderId = $input['entry'][0]['messaging'][0]['sender']['id'];
// $messageText = $input['entry'][0]['messaging'][0]['message']['text'];
// $response = null;
// //set Message
// if ($messageText == "hi") {
//     $answer = "Hello";
// }
// //send message to facebook bot
// $response = [
//     'recipient' => ['id' => $senderId],
//     'message' => ['text' => $answer]
// ];
// $ch = curl_init('https://graph.facebook.com/v2.6/me/messages?access_token=' . $access_token);
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($response));
// curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
// if (!empty($input)) {
//     $result = curl_exec($ch);
// }
// curl_close($ch);
