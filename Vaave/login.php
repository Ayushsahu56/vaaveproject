	<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
require_once 'vendor/autoload.php';

$clientID="157965686839-f0su35skn1tj8gt94lagisn7kt6amkkn.apps.googleusercontent.com";
$clientSecret="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";
$redirectUrl="http://localhost/Vaave/login.php";

// Creating client request to google

$client = new Google_Client();

$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setredirectUri($redirectUrl);
$client->addScope('profile');
$client->addScope('email');

if(isset($_GET['code']))
{
	
	$token=$client->fetchAccessTokenWithAuthCode($_GET['code']);
	$client->setAccessToken($token);
	$gauth = new Google_Service_Oauth2($client);
	$google_info = $gauth->userinfo->get();
	$email = $google_info->email;
	$name = $google_info->name;
	echo $name;
	echo "</br>";
	echo $email;
	?>
	<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="container">
			<p>PHP Quizer</p>
		</div>
	</header>

	<main>
    <div class = "menu">


<a href="main.php" class="button">Take Quiz</a>
<a href="add_sub.php" class="button">Add Subject and questions</a>
</div>
	</main>


	<footer>
			<div class="container">
				Copyright &copy; IT SERIES TUTOR
			</div>


	</footer>
	<?php
}
else{
	echo "<a class='button' href='".$client->createAuthUrl()."'> Login with Google</a>";
}

?>


</body>
</html>
