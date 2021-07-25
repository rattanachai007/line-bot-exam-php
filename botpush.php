<?php



require "vendor/autoload.php";

$access_token = 'oAhhYNK3M9EIIMOOMf2UvGtH6P+WATAmgxO+S8db8SAKMP4BX/2zFpaAALu6fSNfyDMdsMn0VYYjc8kY+2X7zbwOouCcJsEO/Qc4SoZ6p2+XkcHwhey2go5tXEGJ1KGcbR5NtBQpuidY5e1byccdCAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'a3c8f7edc3d3c2456355880719c55181';

$pushID = '1656224412';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







