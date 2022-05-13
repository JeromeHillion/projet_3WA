<?php

namespace App\Repository;


use App\mysql\Database;

class UserRepository

{
    private Database $database;
    private string $table;

    public function __construct()
    {
        $this->database = new Database();
        $this->table = "users";
    }

    public function create(User $user)
    {
        $arrayUser = [
            "pseudo" => $user->getPseudo(),
            "email" => $user->getEmail(),
            "password" => $user->getPassword(),
            "dateAdded" => $user->getDateAdded(),
            "dateUploaded" => $user->getDateUploaded()
        ];

        $dataToInsert = [];
        foreach ($arrayUser as $key => $value) {
            $dataToInsert += [$key => $value];
        }

        $sql = "INSERT INTO {$this->table}(pseudo, email, password, dateAdded, dateUploaded)
                VALUES A(:pseudo, :email, :password, :dateAdded, :dateUploaded)";
        $this->database->request($sql, $dataToInsert);

    }

    public function read()
    {

    }

    public function update(int $currentUserId): void
    {
        $arrayUserId=[
            "currentUserId" => $currentUserId
        ];

        $sql = "UPDATE FROM $this->table SET WHERE id= :userId";
        $this->database->request($sql, $arrayUserId);
    }

    public function delete(int $currentUserId): void
    {
        $arrayUserId=[
            "currentUserId" => $currentUserId
        ];
       $sql = "DELETE FROM $this->table WHERE id = :userId";
       $this->database->request($sql, $arrayUserId);
    }
}