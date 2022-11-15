<?php

$app->get('/ping', API\Controllers\AppController::class.':ping')
	->add(new API\Middlewares\AuthMiddleware($container));

$app->post('/authenticate', \API\Controllers\AppController::class.':authenticate');
$app->post('/register', \API\Controllers\AppController::class.':register');

$app->post('/hello', \API\Controllers\HelloController::class.':helloWorld')
	->add(new API\Middlewares\AuthMiddleware($container));

$app->group('/users', function($group) {
	$group->get('/', \API\Controllers\AppController::class.':getUsers');
	$group->get('/users/{id}', \API\Controllers\AppController::class.':getUser');
})->add(new API\Middlewares\AuthMiddleware($container));