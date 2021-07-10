<?php

namespace lib\Database;

use PDO;

class Database
{
    private $link;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $config = require 'config.php';
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['db_name'] . ';charset=' . $config['charset'];
        $this->link = new PDO($dsn, $config['username'], $config['password']);

        return $this;
    }

    /**
     * @return array
     */
    public function getPizzaList(): array
    {
        $stmt = $this->link->prepare('SELECT * FROM `pizza_type`');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @return array
     */
    public function getSizeList(): array
    {
        $stmt = $this->link->prepare('SELECT * FROM `pizza_size`');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @return array
     */
    public function getSauceList(): array
    {
        $stmt = $this->link->prepare('SELECT * FROM `sauce`');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param int $id
     * @return array
     */
    public function getPizzaById(int $id): array
    {
        $stmt = $this->link->prepare('SELECT * FROM pizza_type WHERE id = ? LiMIT 1');

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param int $id
     * @return array
     */
    public function getSizeById(int $id): array
    {
        $stmt = $this->link->prepare('SELECT * FROM `pizza_size` WHERE id = ? LiMIT 1');

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param int $id
     * @return array
     */
    public function getSauceById(int $id): array
    {
        $stmt = $this->link->prepare('SELECT * FROM `sauce` WHERE id = ? LiMIT 1');

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
