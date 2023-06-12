<?php

function getAuthorizationBearerToken()
{
  $headers = getallheaders();

  if (!isset($headers["Authorization"])) {
    return null;
  }

  $explodedAuthorizationHeader = explode(" ", $headers["Authorization"]);

  if (!isset($explodedAuthorizationHeader[1])) {
    return null;
  }

  return $explodedAuthorizationHeader[1];
}
