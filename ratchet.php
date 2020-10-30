<?php

require __DIR__ . '/vendor/autoload.php';

$app = new Ratchet\App('localhost', 8080);
$server = new Ratchet\Server\EchoServer;

$app->route('/ws', $server, ['*']);
$app->run();
