<?php
$ch = curl_init();

curl_setopt_array($ch, CURLOPT_URL, "http://www.sportsplay.space");

curl_exec($ch);
curl_close($ch);
?>
