<?php

namespace App\mysql;

use PDO;

class Connection
{
    private static ?Connection $instance = null;

    private function __construct()
    {

    }

    public static function getInstance(): ?Connection
    {
        if (self::$instance === null) {
            self::$instance = new Connection();
        }

        return self::$instance;
    }

    public function getConnection(): PDO
    {
        $config =  Config::getConfig();
        $db_host= $config['DB_HOST'];
        $db_user= $config['DB_USER'];
        $db_password=$config['DB_PASSWORD'];
        $db_name=$config['DB_NAME'];


        return new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
    }


}