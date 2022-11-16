<?php

$_theme = APP_THEME;
$_nav = [
	'dashboard' => [
		'title' => 'Dashboard',
		'icon' => 'fal fa-info-circle',
	],
	'network_settings' => [
		'title' => 'Network Settings',
		'icon' => 'fal fa-cog',
		'items' => [
			'eth' => [
				'title' => 'eth',
				'url' => APP_URL.'/settings_how_it_works.php'
			],
			'wlan' => [
				'title' => 'wlan',
				'url' => APP_URL.'/settings_layout_options.php'
			]
		]
	],
	'identification' => [
		'title' => 'Identification Settings',
		'icon' => 'fal fa-book',
	],
	'components' => [
		'title' => 'Localization',
		'icon' => 'fal fa-wrench',
	],
	'database' => [
		'title' => 'Database',
		'icon' => 'fal fa-database',
		'items' => [
			'php_db_intro' => [
				'title' => 'Introduction',
				'url' => APP_URL.'/php_db_intro.php'
			],
			'php_db_users' => [
				'title' => 'Fetch Users',
				'url' => APP_URL.'/php_db_users.php'
			]
		]
	],
	'tor' => [
		'title' => 'TOR Settings',
		'icon' => 'fal fa-lock',
		'items' => [
			'client' => [
				'title' => 'Client Instance',
				'url' => APP_URL.'/php_auth_docs.php'
			],
			'bridge' => [
				'title' => 'Bridge Instance',
				'url' => APP_URL.'/php_auth_page.php'
			],
			'middle' => [
				'title' => 'Middle Instance',
				'url' => APP_URL.'/php_auth_login.php'
			],
			'exit' => [
				'title' => 'Exit Instance',
				'url' => APP_URL.'/php_auth_logout.php'
			],
			'admin' => [
				'title' => 'Admin Info',
				'url' => APP_URL.'/php_auth_logout.php'
			],
			'help' => [
				'title' => 'Help',
				'url' => APP_URL.'/php_auth_logout.php'
			]
		]
	],
	'vpn' => [
		'title' => 'VPN Settings',
		'icon' => 'fal fa-envelope',
	],
	'PRIVOXY' => [
		'title' => 'Privoxy Settings',
		'icon' => 'fal fa-cloud',
	],
	'Mumble' => [
		'title' => 'Mumble Settings',
		'icon' => 'fal fa-lock',
	],
	'prosody' => [
		'title' => 'PROSODY settings',
		'icon' => 'fal fa-window',
	],
	'onionmail' => [
		'title' => 'OnionMail Settings',
		'icon' => 'fal fa-bolt',
	],
	'web_server' => [
		'title' => 'Web Server Settings',
		'icon' => 'fal fa-lock',
		'items' => [
			'service' => [
				'title' => 'Service Settings',
				'url' => APP_URL.'/php_auth_docs.php'
			],
			'ftp' => [
				'title' => 'FTP/SFTP',
				'url' => APP_URL.'/php_auth_page.php'
			],
			'onion' => [
				'title' => 'Onion Addresses',
				'url' => APP_URL.'/php_auth_login.php'
			],
			'map' => [
				'title' => 'Map Addresses',
				'url' => APP_URL.'/php_auth_logout.php'
			],
			'vhosts' => [
				'title' => 'VHosts Settings',
				'url' => APP_URL.'/php_auth_logout.php'
			],
			'db' => [
				'title' => 'DB Settings',
				'url' => APP_URL.'/php_auth_logout.php'
			]
		]
	],
	'xrdp' => [
		'title' => 'XRDP Settings',
		'icon' => 'fal fa-lock',
	],
	'ssh' => [
		'title' => 'SSH Settings',
		'icon' => 'fal fa-lock',
	],
	'firewall' => [
		'title' => 'Firewall Settings',
		'icon' => 'fal fa-lock',
	],
	'wiki' => [
		'title' => 'Wiki',
		'icon' => 'fal fa-lock',
	],
	'websites' => [
		'title' => 'Websites List',
		'icon' => 'fal fa-lock',
	],
	'support' => [
		'title' => 'Support',
		'icon' => 'fal fa-lock',
	],
];
