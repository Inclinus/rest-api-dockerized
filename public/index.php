<?php

require_once __DIR__ . '/../database/database.php';
require_once __DIR__ . '/../libraries/path.php';
require_once __DIR__ . '/../libraries/method.php';
require_once __DIR__ . '/../libraries/header.php';
require_once __DIR__ . '/../libraries/response.php';
require_once __DIR__ . '/../libraries/parameters.php';
require_once __DIR__ . '/../libraries/body.php';

// INDEX.PHP

/**
 * IMPLEMENT ENDPOINTS
 */
if(isPath("users")){
    if(isGetMethod()){
        require_once __DIR__ . '/../services/entity/get-entity.php';
        die();
    }
}

jsonResponse(404, [],"");