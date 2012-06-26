<?php

//$path = dirname(__FILE__).DIRECTORY_SEPARATOR.'src';
//set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once "Auth/OpenID/Consumer.php";
require_once "Auth/OpenID/FileStore.php";
require_once "Auth/OpenID/SReg.php";
require_once "Auth/OpenID/AX.php";
//require_once "Auth/OpenID/PAPE.php";

define('Auth_OpenID_VERIFY_HOST', true);
define('Auth_OpenID_CAINFO', __DIR__.'/../../app/Resources/cacert.pem');