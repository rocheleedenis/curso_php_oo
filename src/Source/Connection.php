<?php

namespace Source;

class Connection implements ConnectionInterface
{
    private $dsn;
    private $user;
    private $pass;

    public function __construct($dsn, $user, $pass)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect()
    {
        try {
            return new \PDO($this->dsn, $this->user, $this->pass);
        } catch (\PDOException $e) {
            return "Error! <br>Message: " . $e->getMessage() . '<br>Code: ' . $e->getCode();
        }
    }
}
