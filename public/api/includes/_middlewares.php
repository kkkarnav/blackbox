<?php

// Routing middleware
$app->addRoutingMiddleware();

// Error handler
$error_middleware = $app->addErrorMiddleware(__DEV__ || __TEST__, true, true);
$error_middleware->setDefaultErrorHandler(function($request, $ex) use ($app) {
	$response = $app->getResponseFactory()->createResponse();
    return $app->getContainer()->get('formatter')->format($response, $ex->getMessage(), $ex->getCode() ?: 400);
});

$app->add(new API\Middlewares\RateLimiterMiddleware($container));
$app->add(new API\Middlewares\RequestMiddleware($container));
$app->add(new API\Middlewares\LoggerMiddleware($container));