<?php

$db = new \PDO('mysql:host=localhost;dbname=curso_avancando_com_oo', 'root', '');

$query = 'SELECT * FROM products';

$stmt = $db->prepare($query);
$stmt->execute();

$list = $stmt->fetchAll(\PDO::FETCH_ASSOC);

print_r($list);