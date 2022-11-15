<?php

require_once 'init.utils.php';

$options = \Common\Util::getOptions(['username,u:'], $exception);
if ($options) {
	$username = $options['username'];
	$user = \Models\User::withUsername($username);
	if ($user) {
		$access_token = $user->createAccessToken();

		plog('username: '.$user->username);
		plog('access token: '.$access_token->token);

	} else plog('user not found');
} else plog($exception);