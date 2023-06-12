<?php

function getUsers() {
    require_once __DIR__ . "/../../database/connection.php";

    $databaseConnection = getDatabaseConnection();

    $getUsersQuery = $databaseConnection->query("SELECT * FROM users;");

    return $getUsersQuery->fetchAll(PDO::FETCH_ASSOC);
}

