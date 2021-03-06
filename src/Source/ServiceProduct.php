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

    public function find(int $id)
    {
        $query = 'SELECT * FROM products where id = :id ';

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function list()
    {
        $query = 'SELECT * FROM `products`';

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function save()
    {
        $query = 'INSERT INTO `products` (`name`, `description`) VALUES (:name, :description)';

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':name', $this->product->getName());
        $stmt->bindValue(':description', $this->product->getDescription());
        $stmt->execute();

        return $this->db->lastInsertId();
    }

    public function update()
    {
        $query = 'UPDATE `products` SET `name` = ?, `description` = ? WHERE `id` = ?';

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(1, $this->product->getName());
        $stmt->bindValue(2, $this->product->getDescription());
        $stmt->bindValue(3, $this->product->getId());

        return $stmt->execute();
    }

    public function delete(int $id)
    {
        $query = 'DELETE FROM `products` WHERE `id` = ?';

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(1, $id);

        return $stmt->execute();
    }
}