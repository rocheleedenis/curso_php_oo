<?php

use Pimple\Container;

$container = new Container();

$container['dsn'] = 'mysql:host=localhost;dbname=curso_avancando_com_oo';
$container['user'] = 'root';
$container['pass'] = '';