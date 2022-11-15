<?php

\Models\Model::connect(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD, DB_PORT);
\Models\Model::$db->onError(function($msg) {
	plog($msg);
});

// configure models
\Models\User::register('users');
\Models\AccessToken::register('access_tokens');
\Models\Session::register('sessions');
\Models\APIRequest::register('api_requests');
\Models\Organization::register('organizations');
\Models\Verification::register('verifications');