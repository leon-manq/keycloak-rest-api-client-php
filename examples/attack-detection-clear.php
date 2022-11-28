<?php

declare(strict_types=1);

use Fschmtt\Keycloak\Keycloak;
use Fschmtt\Keycloak\Representation\Realm;

require_once __DIR__ . '/../vendor/autoload.php';

$keycloak = new Keycloak(
    'http://keycloak:8080',
    'admin',
    'admin',
    version: '20.0.0',
);

$keycloak->attackDetection()->clear(
    new Realm(realm: 'master')
);
