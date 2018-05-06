<?php

namespace App;
/**
 * Created by PhpStorm.
 * User: tdels
 * Date: 29-04-18
 * Time: 15:13
 */
class Config{
    public static function getPDO(){
        try {
            $pdo = new \PDO('mysql:host=127.0.0.1;dbname=villes', 'root', '');
            //$pdo = new PDO("mysql:host=localhost;dbname=villes", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

            return $pdo;

        }catch(\PDOException $e) {
            echo 'erreur';
        }
    }

}
