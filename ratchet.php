<?php

require __DIR__ . '/vendor/autoload.php';

$port = getenv("PORT") ?: 8080;

$app = new Ratchet\App('ratchet-load-test.herokuapp.com', $port, '0.0.0.0');
$server = new Ratchet\Server\EchoServer;

$app->route('/ws', $server, ['*']);
$app->run();
