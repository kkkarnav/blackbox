<?php

$container->set('logger', new API\Logger($container));
$container->set('formatter', new API\ResponseFormatter($container));