<?php

namespace ToDo;
use PDO;

class Database{
    private static $host ='mysql:host=ddev-php-db';
    private static $user = 'db';
    private static $password = 'db';
    private static $database = 'db';
    private static $options = [
        PDO::ATTR_ERRMODE =>PDO::ERRMODE_WARNING
    ];

    public static function connect(){
        try{
            return $pdo = new PDO(
                self::$host.';dbname='.self::$database,
                self::$user,
                self::$password,
                self::$options);
        }catch(\PDOException $e){
            die($e->getMessage());
        }
    }
}