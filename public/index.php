<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";

$list = $container['ServiceProduct']->list();
require_once "list.product.php";

$container['product']
        ->setId(1)
        ->setName('PHP Course Test Update')
        ->setDescription('PHP course at the School Of Net');

print_r($container['ServiceProduct']->update());

$list = $container['ServiceProduct']->list();
require_once "list.product.php";