<?php

$container['connection'] = function ($container) {
    return new \Source\Connection($container['dsn'], $container['user'], $container['pass']);
};

$container['product'] = function ($container) {
    return new \Source\Product($container['connection']);
};