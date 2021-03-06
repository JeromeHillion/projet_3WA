<?php

namespace App\Manager;

use App\Controller\ControllerInterface;


class ControllerManager
{

    public static function getControllerName(): string
    {

        if (isset ($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
            $url = "https";
        else
            $url = "http";

        //Ajouter // à l'url
        $url .= "://";

        //Ajouter l'hôte (nom de domaine , ip) à l'url
        $url .= $_SERVER['HTTP_HOST'];

        //Ajouter l'emplacement de la ressource demandée à l'url
        $url .= $_SERVER['REQUEST_URI'];


        $part = explode("=", $url);
        unset($part[0]);

        $controllerName = "";
        foreach ($part as $value) {
            $controllerName = $value;
        }

        if ($controllerName == null) {
            $controllerName = "Default";
        }
        return $controllerName;

    }

    public static function getController(): ControllerInterface
    {

        $controllerName = self::getControllerName();

        $controllerClass = 'App\\Controller\\' . $controllerName . 'Controller';
        if (!class_exists($controllerClass)) {
            echo "Le controller n'existe pas !";
        }
        return new $controllerClass;

    }
}