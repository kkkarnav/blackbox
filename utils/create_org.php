<?php

require_once 'init.utils.php';

$config = [
	'name,n:',
	'email,e::',
	'about,a::',
	'website,w::'
];

$options = \Common\Util::getOptions($config, $exception);
if ($options) {
	$org = \App\App::addOrganization($options);
	if ($org) plog('OK #'.$org->id);
	else plog('FAIL');

} else {
	plog($exception);
}


?>