<?php

namespace App\Repository;

use App\Model\Post;
use App\mysql\Database;
use App\Repository\Repository;

class PostRepository extends Repository
{
    private Post $post;
    private ?Database $database;
    private array $datas;
    private string $table;


    public function __construct()
    {
        $this->database = new Database;
        $this->table = "post";
    }


    public function create(Post $post)
    {

        $array_post = [
            "title" => $post->getTitle(),
            "picture" => $post->getPicture(),
            "description" => $post->getDescription(),

        ];
        $data_to_insert = [];
        foreach ($array_post as $key => $value){
            $data_to_insert+=[$key =>$value] ;
        }

        $sql = "INSERT INTO {$this->table}(title, picture, description) VALUES (:title, :picture, :description)";
        $this->database->request($sql, $data_to_insert);


    }

    public function read()
    {
        // TODO: Implement add() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }
}