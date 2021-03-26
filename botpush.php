<?php



require "vendor/autoload.php";

$access_token = 'RpHEQJtJOD+FSy2eD0DtdmtR+i6t1RM1uc2Dc4pb4sawCbI3GaiWtbiJ/QJBhJjo0tFOjLO1yc/5d4dWISGml8nHFwpekXceYS9N5eiy7IuxLr41mkKyDOQrN9SKHTxjguioyIgqs4tdpZudDPGXCAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '3fc10f3f004406d526ee51e7a02f8feb';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







