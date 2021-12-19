<?php

require_once "../vendor/autoload.php";

use Pimple\Container;

$container = new Container();

$container['connection'] = function () {
    return new \Source\Connection(
        'mysql:host=localhost;dbname=curso_avancando_com_oo',
        'root',
        ''
    );
};

$container['product'] = function ($container) {
    return new \Source\Product($container['connection']);
};

$list = $container['product']->list();

print_r($list);