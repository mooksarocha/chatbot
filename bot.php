<?php


$API_URL = 'https://api.line.me/v2/bot/message';
$ACCESS_TOKEN = 'H0uJwBHbgextqxMkLtjaxbYjo+OQ1HcHuri028I8uBqMNCrLEN3rEvaN82fX3+o2s2YUVwE1cdejwIHpzzoS11kZB076V35X89TTaYsFjmJ6EZebRKObFA7nhsvZ9tGlyKYW0AJG7fb37N+S7ARplAdB04t89/1O/w1cDnyilFU='; 
$channelSecret = 'ba6e01c3eb0671a32e7d9fb3dbabd67d';


$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);

$request = file_get_contents('php://input');   // Get request content
$request_array = json_decode($request, true);   // Decode JSON to Array
var_export($request_array);
	if (($event instanceof \LINE\LINEBot\Event\MessageEvent\TextMessage)) {
		$messageText=strtolower(trim($event->getText()));
		switch ($มหาวิทยาลัยนเรศวร) {
case "location" :
			$outputText = new \LINE\LINEBot\MessageBuilder\LocationMessageBuilder("มหาวิทยาลัยนเรศวร", "ตำบลท่าโพธิ์,อำเภอเมือง,พิษณุโลก,65000", 16.746208,100.191671);
			break;
echo "OK";




function send_reply_message($url, $post_header, $post_body)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

?>
