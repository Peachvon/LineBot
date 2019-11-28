 <?php
  

function send_LINE($msg){
 $access_token = 'SfYk5HulxIOqkOWbnwQSB6HmpWT2vH4izdqR27jh/YYJWECxy6idOwSD54e5fgGQx3/iyY8x/biuundzYlJFLZxtwNPC3WNWLFRzNfwwPDRTcYST3dWH9QvhbbdmNIpzXASvpKjyye91gZJi8x49AwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'xtrickyx',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
