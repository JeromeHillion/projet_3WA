<?php

namespace App\mysql;


class Database
{

    private ?\PDO $connection = null;

    public function __construct()
    {
        $this->connection = Connection::getInstance()->getConnection();
    }


    public function request(string $type, string $table, array $datas)
    {
        if ($this->connection) {

            foreach ($datas as $data) {
                $sql = match ($type){
                    "INSERT" => "INSERT INTO {$table} VALUES (:{$data})",
                    "UPDATE" => "UPDATE {$table} SET id=:{$data}",
                    "DELETE" => "DELETE FROM {$table} WHERE id >=:{$data}",
                };

                $req = $this->connection->prepare($sql);

                $req->execute([
                    ":" . $data => $data
                ]);
               
            }
            
        }
    }
}