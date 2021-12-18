<?php

require_once "../vendor/autoload.php";

use Pimple\Container;

$container = new Container();
$container['date'] = function () {
    return new \DateTime;
};

print_r($container['date']);