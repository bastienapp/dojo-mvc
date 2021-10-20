<?php

require_once __DIR__ . '/controllers/GameController.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$gameController = new GameController();
if ('/' === $urlPath) {
    $gameController->showAll();
} else {
    header('HTTP/1.0 404 Not Found');
}
