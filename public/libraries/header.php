<?php
function getAuthorizationBearerToken(): string
{
    $headers = getallheaders();

    if (!isset($headers["Authorization"])) {
        throw new Exception("Authorization header is missing");
    }

    $authorizationHeader = $headers["Authorization"];
    $authorizationHeaderParts = explode(" ", $authorizationHeader);
    $authorizationHeaderPartsCount = count($authorizationHeaderParts);

    if ($authorizationHeaderPartsCount !== 2) {
        throw new Exception("Authorization header is not correctly set");
    }

    $authorizationHeaderType = $authorizationHeaderParts[0];
    $authorizationHeaderToken = $authorizationHeaderParts[1];

    if ($authorizationHeaderType !== "Bearer") {
        throw new Exception("Authorization header type should be Bearer");
    }

    if (!$authorizationHeaderToken) {
        throw new Exception("Authorization header token is missing");
    }

    return $authorizationHeaderToken;
}