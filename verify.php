<?php
$access_token = 'SfYk5HulxIOqkOWbnwQSB6HmpWT2vH4izdqR27jh/YYJWECxy6idOwSD54e5fgGQx3/iyY8x/biuundzYlJFLZxtwNPC3WNWLFRzNfwwPDRTcYST3dWH9QvhbbdmNIpzXASvpKjyye91gZJi8x49AwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
