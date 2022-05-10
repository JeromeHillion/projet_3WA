<?php


use App\Model\Post;
use App\Repository\PostRepository;

require_once "vendor/autoload.php";

$post = new Post();

$title = "Les pommes";
$picture = "https://fakeimg.pl/250x100/";
$description = "La pomme est un fruit comestible produit par un pommier. Les pommiers sont cultivés à travers le monde et représentent l'espèce la plus cultivée du genre Malus";

$post->setTitle($title);
$post->setPicture($picture);
$post->setDescription($description);

$postRepository = new PostRepository();
$postRepository->create($post);


/* phpinfo(); */