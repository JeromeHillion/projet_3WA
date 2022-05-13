<?php

namespace App\Repository;

use App\mysql\Database;

class LikeRepository
{
    private Database $database;
    private string $table;


    public function __construct()
    {
        $this->database = new Database();
        $this->table = "like";
    }

    public function create(Like $like)
    {

        $array_like = [
            "postId" => $like->getPostId(),
            "userId" => $like->getUserId(),
            "like" => $like->getLike(),
            "dateAdded" => $like->getDateAdded(),
            "dateUploaded" => $like->getDateUploaded()
        ];

        $dataToInsert = [];

        foreach ($array_like as $key => $value) {
            $dataToInsert += [$key => $value];
        }

        $sql = "INSERT INTO {$this->table}(postId, userId, like, dateAdded, dateUploaded )
                VALUES (:postId, :userId, :like, :dateAdded, :dateUploaded )";
        $this->database->request();

    }

    public function read()
    {

    }

    public function update(int $likeId): void
    {
        $arrayLikeId=[
            "likeId" => $likeId
        ];

        $sql = "UPDATE FROM $this->table SET WHERE id = :likeId";
        $this->database->request($sql, $arrayLikeId);

    }

    public function delete(int $likeId): void
    {
        $arrayLikeId=[
            "likeId" => $likeId
        ];
        $sql = "DELETE FROM $this->table WHERE id = :likeId";
        $this->database->request($sql, $arrayLikeId);
    }

}