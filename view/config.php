<?php

require_once './vendor/autoload.php';

$google_client = new Google_Client();
$google_client->setAuthConfig('client_secret.json');
$google_client->setRedirectUri('http://localhost/BPWL/UTS/view/admin.php');

$google_client->addScope('email');
$google_client->addScope('profile');
$google_client->addScope('https://www.googleapis.com/auth/user.birthday.read');

session_start();

?>
