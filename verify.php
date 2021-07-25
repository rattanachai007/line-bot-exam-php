<?php
$access_token = 'oAhhYNK3M9EIIMOOMf2UvGtH6P+WATAmgxO+S8db8SAKMP4BX/2zFpaAALu6fSNfyDMdsMn0VYYjc8kY+2X7zbwOouCcJsEO/Qc4SoZ6p2+XkcHwhey2go5tXEGJ1KGcbR5NtBQpuidY5e1byccdCAdB04t89/1O/w1cDnyilFU==';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
