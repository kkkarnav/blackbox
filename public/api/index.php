<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

chdir(__DIR__);
require_once '../../const.php';
require_once '../../root.php';
require_once '../../db.php';

AppFactory::setContainer(new \DI\Container);
$app = AppFactory::create();
$app->setBasePath(API_URI);

$container = $app->getContainer();

include_once 'includes/_middlewares.php';
include_once 'includes/_containers.php';
include_once 'includes/_routes.php';

$app->run();