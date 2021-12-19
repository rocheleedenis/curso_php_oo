<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";

$list = $container['ServiceProduct']->list();
require_once "list.product.php";

$product = $container['ServiceProduct']->find(1);
require_once "one.product.php";
