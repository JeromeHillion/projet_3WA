<?php


use App\Model\Post;
use App\Repository\PostRepository;

require_once "vendor/autoload.php";

$post = new Post();
$post->setTitle("Les poires");
$post->setPicture("https://fakeimg.pl/250x100/");
$post->setDescription("La poire est le fruit à pépins comestible au goût doux et sucré, produit par le poirier commun (Pyrus communis L.), arbre de la famille des Rosaceae.");

$postRepository = new PostRepository();
$postRepository->create($post);


/* phpinfo(); */