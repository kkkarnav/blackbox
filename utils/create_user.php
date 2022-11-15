<?php

require_once 'init.utils.php';

$config = [
	'password,p:',
	'email,e:',
	'firstname,f:',
	'lastname,l:',
	'org-id,o::'
];

$options = \Common\Util::getOptions($config, $exception);
if ($options) {

	try {
		$organization = null;
		$org_id = get('org-id', $options);
		if ($org_id) {
			$organization = \Models\Organization::instance($org_id);
			if (!$organization) throw new Exception('Organization does not exists');
		}

		$user = \App\App::addUser($options, $organization);
		if ($user) plog('OK #'.$user->id);
		else plog('FAIL');

	} catch (Exception $ex) {
		plog('ERR: '.$ex->getMessage());
	}
} else {
	plog($exception);
}


?>