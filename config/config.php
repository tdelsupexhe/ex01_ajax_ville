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
            $pdo = new \PDO('mysql:host=localhost;dbname=villes', 'root', '');

            return $pdo;

        }catch(\PDOException $e) {
            echo 'erreur';
        }
    }

}
