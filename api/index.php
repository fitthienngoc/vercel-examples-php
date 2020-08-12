<?php

$access_token = "EAADl7p3EviUBAH3aFW4k933PVdNzWZCkB2ievsGDZC6f8j2ECNOkSVhxzPZAiyq2swQsY7ZAyjaLXflBkkLgzPU1jgZCnOtHC2yv3bAbRccdpMkgGu0bXdCsvOn1MyvCGj1ySgobZAAID7XZBb7Qta9FHoBGq3ucr82eU5Qtye00SO507vMsZBev";
$verify_token = "fb_time_bot";
$hub_verify_token = null;
if (isset($_REQUEST['hub_challenge'])) {
    $challenge = $_REQUEST['hub_challenge'];
    $hub_verify_token = $_REQUEST['hub_verify_token'];
}
if ($hub_verify_token === $verify_token) {
    echo $challenge;
}

if (isset($_REQUEST)) {
    var_dump($_REQUEST);
}
