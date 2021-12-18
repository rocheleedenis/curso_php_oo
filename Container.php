<?php

class Container
{
    public static function getProduct()
    {
        return new Product(self::getConnection());
    }

    public static function getConnection()
    {
        return new Connection(
            'mysql:host=localhost;dbname=curso_avancando_com_oo',
            'root',
            ''
        );
    }
}
