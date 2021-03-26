<?php


$access_token = 'RpHEQJtJOD+FSy2eD0DtdmtR+i6t1RM1uc2Dc4pb4sawCbI3GaiWtbiJ/QJBhJjo0tFOjLO1yc/5d4dWISGml8nHFwpekXceYS9N5eiy7IuxLr41mkKyDOQrN9SKHTxjguioyIgqs4tdpZudDPGXCAdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

