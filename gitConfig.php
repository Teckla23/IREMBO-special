<?php
// Start session
if(!session_id()){
    session_start();
}

// Include Github client library 
require_once 'Github_OAuth_Client.php';


/*
 * Configuration and setup GitHub API
 */
$clientID         = '1e08a9168afff612b17d';
$clientSecret     = 'e75d7adce4defb975c8b021234df3ae9d2525920';
// $redirectURL     = 'http://localhost/signWithGithub/';
$redirectURL     = 'https://www.codexworld.com/github-login/';

$gitClient = new Github_OAuth_Client(array(
    'client_id' => $clientID,
    'client_secret' => $clientSecret,
    'redirect_uri' => $redirectURL,
));


// Try to get the access token
if(isset($_SESSION['access_token'])){
    $accessToken = $_SESSION['access_token'];
}