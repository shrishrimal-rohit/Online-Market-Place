<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '1019029700686-2onavltkv2uf99im8oupci1q044cjj9u.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'o2tfLi6kkBEixVs2vi0bGioc'; //Google client secret
$redirectURL = 'http://guptashantanu.com/googlelogin_index.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>