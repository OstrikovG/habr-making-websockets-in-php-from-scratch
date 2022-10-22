<?php

declare(strict_types=1);

use OstrikovG\HabrMakingWebsocketsInPhpFromScratch\WebsocketServer;

require __DIR__ . '/vendor/autoload.php';

$config = array(
    'host' => '0.0.0.0',
    'port' => 8000,
    'workers' => 1,
);

$WebsocketServer = new WebsocketServer($config);
$WebsocketServer->start();