<?php

function jsonResponse($statusCode, $headers, $body)
{
    // Modifie le code de statut
    http_response_code($statusCode);

    // On modifie les en-têtes
    foreach ($headers as $headerName => $headerValue) {
        header("$headerName: $headerValue");
    }

    header("Content-Type: application/json");

    // On renvoie une réponse (contenu)
    return json_encode($body);

    // 200 -> OK
    // 404 -> Not found
    // 500 -> Internal server error
}
