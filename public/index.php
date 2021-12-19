<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";

$container['ServiceProduct']->delete(1);

$list = $container['ServiceProduct']->list();
require_once "list.product.php";