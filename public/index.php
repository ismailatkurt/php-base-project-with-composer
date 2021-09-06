<?php

use App\Services\BaseService;

require_once dirname(__DIR__) . "/vendor/autoload.php";
require_once dirname(__DIR__) . '/bootstrap/dependencies.php';


$base = new \App\Models\Base('Index is called');

echo PHP_EOL . $base->getFoo() . PHP_EOL;

/** @var BaseService $baseService */
$baseService = $container->get(\App\Bootstrap\DiKeys::BASE_SERVICE);

$baseInstanceFromService = $baseService->createBaseInstance('foo from service via DI Container');

echo PHP_EOL . $baseInstanceFromService->getFoo() . PHP_EOL;

echo PHP_EOL;
