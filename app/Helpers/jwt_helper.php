<?php

use App\Models\SysUserModel;
use Config\Services;
use Firebase\JWT\JWT;

function getJWTFromRequest($authenticationHeader): string
{
    if (is_null($authenticationHeader)) { //JWT is absent
        throw new Exception('Missing or invalid JWT in request');
    }
    //JWT is sent from client in the format Bearer XXXXXXXXX
    return explode(' ', $authenticationHeader)[1];
}

function validateJWTFromRequest(string $encodedToken)
{
    $key = Services::getSecretKey();
    $decodedToken = JWT::decode($encodedToken, $key, ['HS256']);
    $userModel = model('SysUserModel');
    $userModel->findUserByUserId($decodedToken->user_id);
}

function getSignedJWTForUser(int $user_id, string $scopes)
{
    $issuedAtTime = time();
    if ($scopes == 'refresh_token') $tokenExpiration = $issuedAtTime + getenv('REFRESH_JWT_TIME_TO_LIVE');
    else $tokenExpiration = $issuedAtTime + getenv('JWT_TIME_TO_LIVE');
    $payload = [
        'user_id' => $user_id,
        'iat' => $issuedAtTime,
        'exp' => $tokenExpiration,
        'scopes' => $scopes,
    ];

    $jwt = JWT::encode($payload, Services::getSecretKey());
    return $jwt;
}
