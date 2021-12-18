<?php

namespace Source;

class Product
{
    private $db;

    public function __construct(ConnectionInterface $db)
    {
        $this->db = $db->connect();
    }

    public function list()
    {
        $query = 'SELECT * FROM products';

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
