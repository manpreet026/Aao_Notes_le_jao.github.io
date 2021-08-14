<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('1083617913843-chqagog3kll5lj5du3ksrp1798pms5vi.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('u9oAQErrJ5qe5sE-N39dd-1r
');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/AAO%20NOTES%20LE%20JAO/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 