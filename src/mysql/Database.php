<?php

namespace App\mysql;

use App\Model\Post;


class Database
{

    private ?\PDO $connection = null;

    public function __construct()
    {
        $this->connection = Connection::getInstance()->getConnection();
    }

    public function request(string $sql, array $array)
    {
        if ($this->connection) {

            $req = $this->connection->prepare($sql);
            foreach ($array as $key => $value) {
                $req->bindValue(':' . $key, $value);
            }
            $req->execute();
        }
    }
}