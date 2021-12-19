<?php

namespace Source;

class Connection implements ConnectionInterface
{
    private $host;
    private $dbname;
    private $user;
    private $pass;

    public function __construct($host, $dbname, $user, $pass)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect()
    {
        try {
            return new \PDO(
                "mysql:host={$this->host};dbname={$this->dbname}",
                $this->user,
                $this->pass
            );
        } catch (\PDOException $e) {
            return "Error! <br>Message: " . $e->getMessage() . '<br>Code: ' . $e->getCode();
        }
    }
}
