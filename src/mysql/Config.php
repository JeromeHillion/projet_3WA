<?php

namespace App\mysql;

class Config
{
public static function getConfig(){
    return [
        "DB_HOST" => "localhost",
        "DB_USER" => "root",
        "DB_NAME" => "projet_db",
        "DB_PASSWORD" => ""
    ];
}
}