<?php

require_once __DIR__ . "/../../libraries/response.php";
require_once __DIR__ . "/../../entities/users/get-users.php";

try {
    $users = getUsers();

    echo jsonResponse(200, [], [
        "success" => true,
        "users" => $users
    ]);
} catch (Exception $exception) {
    echo jsonResponse(500, [], [
        "success" => false,
        "error" => $exception->getMessage()
    ]);
}