<?php

require_once 'init.php';

$template = get('template') ?: \Common\Mailer::TEMPLATE_DEFAULT;

$body = \Common\Mailer::formatBody($_GET, $template);

// replace the logo for this demo
$body = str_replace('cid:logo', ASSETS_URL.'/img/logo.png', $body);
echo $body;