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


    public function __construct()
    {
        $this->database = new Database;
    }



    public function create(Post $post)
    {

        $datas = [$post];
        $type = "INSERT";
        $table = "post";
       $req = $this->database->request($type, $table, $datas); 
       if ($req){
           echo "Entrée réussi !";
       }

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