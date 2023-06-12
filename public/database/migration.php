<?php

require_once __DIR__ . "/connection.php";

try {
    $databaseConnection = getDatabaseConnection();

    $file = fopen(__DIR__ . "/../../docker/db/script.sql", "r");
    $fileContent = fread($file, filesize(__DIR__ . "/../../docker/db/script.sql"));
    $databaseConnection->query($fileContent);

    echo "Migration successful" ;
} catch (Exception $exception) {
    die($exception->getMessage());
}
