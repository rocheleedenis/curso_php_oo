<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";

$container['product']
        ->setName('Pithon Course')
        ->setDescription('Build a complete website');

print_r($container['ServiceProduct']->save());

$list = $container['ServiceProduct']->list();
require_once "list.product.php";