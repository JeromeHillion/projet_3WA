<?php


use App\Manager\ControllerManager;

require_once "vendor/autoload.php";

/*$post = new Post();
$post->setTitle("Les bananes");
$post->setPicture("https://fakeimg.pl/250x100/");
$post->setDescription("La banane est le fruit ou la baie dérivant de l’inflorescence du bananier. Les bananes sont des fruits très généralement stériles issus de variétés domestiquées. Seuls les fruits des bananiers sauvages et de quelques cultivars domestiques contiennent des graines. Les bananes sont généralement jaunes avec des taches brunâtres lorsqu'elles sont mûres et vertes quand elles ne le sont pas.");

$postRepository = new PostRepository();
$postRepository->create($post);*/

ControllerManager::getController()->execute();

/*var_dump($_GET);*/
/* phpinfo(); */