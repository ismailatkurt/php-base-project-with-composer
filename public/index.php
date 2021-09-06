<?php

require_once dirname(__DIR__) . "/vendor/autoload.php";

$base = new \App\Models\Base('Index is called');

echo $base->getFoo();