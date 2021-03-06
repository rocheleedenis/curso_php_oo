<?php

$container['connection'] = function ($container) {
    return new \Source\Connection(
        $container['host'],
        $container['dbname'],
        $container['user'],
        $container['pass']
    );
};

$container['product'] = function () {
    return new \Source\Product;
};

$container['ServiceProduct'] = function ($container) {
    return new \Source\ServiceProduct($container['connection'], $container['product']);
};