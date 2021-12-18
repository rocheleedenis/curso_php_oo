<?php

require_once "ConnectionInterface.php";
require_once "Connection.php";
require_once "Product.php";

$db = new Connection(
    'mysql:host=localhost;dbname=curso_avancando_com_oo',
    'root',
    ''
);

$product = new Product($db);

$list = $product->list();

print_r($list);