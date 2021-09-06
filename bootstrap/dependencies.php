<?php

$builder = new \DI\ContainerBuilder();
$builder->useAutowiring(false);
$builder->useAnnotations(false);

$container = $builder->build();

$container->set(\App\Bootstrap\DiKeys::BASE_SERVICE, function () {
    return new \App\Services\BaseService();
});

return $container;