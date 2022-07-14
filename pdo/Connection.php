<?php

require_once 'Config.php';
class Connection {
    public static function getConnection($host,$dbName,$username,$pass) {
        $dns = "mysql:host=$host;dbname=$dbName;charset=UTF8";
        try {
            $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            return new PDO($dns,$username,$pass,$option);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
}

?>