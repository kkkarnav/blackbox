<?php

// this is the main entry point of the app.
// this assumes that composer is already installed and const.php was required

require_once ROOT_PATH.'/vendor/autoload.php';

// create root directories
$dirs = ['tmp', 'cache', 'logs', 'archive'];
foreach ($dirs as $dir) {
	$path = ROOT_PATH.'/'.$dir;
	if (!file_exists($path)) {
	    mkdir($path, 0777, true);
	    chmod($path, 0775);
	}
}

// load configuration from .env
$dotenv = Dotenv\Dotenv::create(ROOT_PATH, '.env');
$dotenv->load();

// global functions
require_once ROOT_PATH.'/config.php';
require_once ROOT_PATH.'/lib/func.php';

// Cache
\Common\Cache::setKey(ENCRYPTION_KEY);

// Moment
\Moment\Moment::setDefaultTimezone(date_default_timezone_get());