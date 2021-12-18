<?php

require_once "ConnectionInterface.php";
require_once "Connection.php";
require_once "Product.php";
require_once "Container.php";

$product = Container::getProduct();
$list = $product->list();

print_r($list);