<?php

namespace Source;

class ServiceProduct implements ServiceProductInterface
{
    private $db;
    private $product;

    public function __construct(ConnectionInterface $db, ProductInterface $product)
    {
        $this->db = $db->connect();

        if (!is_object($this->db)) {
            exit($this->db);
        }

        $this->product = $product;
    }

    public function list()
    {
        $query = 'SELECT * FROM products';

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function save()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}