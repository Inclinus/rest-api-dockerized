<?php

function getDatabaseConnection(){
    $config = parse_ini_file(__DIR__ . '/../database/config.ini');

    try {
        $pdo = new PDO("mysql:host=".$config["DB_IP"].";port=".$config["DB_PORT"].";dbname=".$config["DB_NAME"],$config["DB_USER"],$config["DB_PASSWORD"]);
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }

    return $pdo;
}