<?php

require_once 'init.utils.php';

$config = [
	'username,u:',
	'password,p:'
];

$options = \Common\Util::getOptions($config, $exception);
if ($options) {
	$user = \Models\User::withUsername(get('username', $options));
	$result = $user->setPassword(get('password', $options));
	if ($result) plog('OK');
	else plog('FAIL');

} else {
	plog($exception);
}


?>