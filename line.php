 <?php
  

function send_LINE($msg){
 $access_token = 'ojNqVQZh/gC0bY5nAexPJg46bl2Y7NVOV+QR4+zTUQxLTSap1XFx7T6QBDXkFbhNq/fDnN85b+UqmkYMFGvFTRWob8YjZRO3ifSdsIvmZicDUaaPH6JeAdDyPH3wltsD1CjqVCE9r+bZT7Tc6QqyCwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        //'to' => 'U8791d83b3e3694b378528d3c3901b3ed',
        'to' => '1656371009',
       
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
