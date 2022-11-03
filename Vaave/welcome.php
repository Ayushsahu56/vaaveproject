<?php
include_once 'login.php';
$token=$client->fetchAccessTokenWithAuthCode($_GET['code']);
	$client->setAccessToken($token);
	$gauth = new Google_Service_Oauth2($client);
	$google_info = $gauth->userinfo->get();
	$email = $google_info->email;
	$name = $google_info->name;
	echo $name;
	echo $email;
	?>