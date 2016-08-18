<?php

// error reporting (this is a demo, after all!)
ini_set('display_errors',1);error_reporting(E_ALL);

// Configuration
$dsn = 'mysql:dbname=oauth2_db;host=localhost';
$username = 'root';
$password = 'ubuntu';

require __DIR__ . '/vendor/autoload.php';

use OAuth2\Storage\Pdo;
use OAuth2\Server;
use OAuth2\GrantType\RefreshToken;
//use OAuth2\GrantType

$storage = new Pdo(array('dsn' => $dsn, 'username' => $username, 'password' => $password));

$server = new Server($storage);


