<?php

// error reporting (this is a demo, after all!)
ini_set('display_errors',1);error_reporting(E_ALL);

// Environment
// TODO: Set this from outside somehow
define("ENVIRONMENT", "DEV");

// Configuration
$dsn = 'mysql:dbname=oauth2_db;host=localhost';
$username = 'root';
$password = 'ubuntu';

if (!array_key_exists('HTTP_POST', $_SERVER)) {
    if (ENVIRONMENT === 'DEV') {
        $_SERVER['HTTP_POST'] = 'http://localhost';
    }
    else {
        throw new Exception('Must launch a production version from HTTP server');
    }
}

// Load dependencies
require __DIR__ . '/vendor/autoload.php';

use OAuth2\Storage\Pdo;
use OAuth2\Server as OAuth2Server;
use OAuth2\GrantType\RefreshToken;
use OAuth2\GrantType\UserCredentials;
use OAuth2\Request;
use OAuth2\Response;

$storage = new Pdo(array('dsn' => $dsn, 'username' => $username, 'password' => $password));

/*$grantTypes = array(
    'user_credentials' => new UserCredentials($storage),
    'refresh_token' => new RefreshToken($storage)
);*/

$server = new OAuth2Server($storage, array(
    'issuer' => $_SERVER['HTTP_POST']
));//), $grantTypes);

$server->addGrantType(new UserCredentials($storage));

$server->handleTokenRequest(Request::createFromGlobals(), new Response()) -> send();
