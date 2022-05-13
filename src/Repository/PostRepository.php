<?php

namespace App\Repository;

use App\Model\Post;
use App\mysql\Database;


class PostRepository
{
    private ?Database $database;
    private string $table;


    public function __construct()
    {
        $this->database = new Database;
        $this->table = "post";
    }


    public function create(Post $post): void
    {

        $array_post = [
            "title" => $post->getTitle(),
            "picture" => $post->getPicture(),
            "description" => $post->getDescription(),
            "dateAdded" => $post->getDateAdded(),
            "dateUploaded" => $post->getDateUploaded()

        ];
        $data_to_insert = [];
        foreach ($array_post as $key => $value) {
            $data_to_insert += [$key => $value];
        }

        $sql = "INSERT INTO {$this->table}(title, picture, description)
                VALUES (:title, :picture, :description)";
        $this->database->request($sql, $data_to_insert);


    }

    public function read()
    {
        // TODO: Implement add() method.
    }

    public function update(int $postId): void
    {
        $arrayPostId=[
            "postId" => $postId
        ];

        $sql = "UPDATE FROM $this->table SET WHERE id= :postId";
        $this->database->request($sql, $arrayPostId);
    }

    public function delete(int $postId): void
    {
        $arrayPostId=[
            "postId" => $postId
        ];
        $sql = "DELETE FROM $this->table WHERE id = :postId";
        $this->database->request($sql, $arrayPostId);
    }
}