<?php

// /show?id=1 > /show
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($urlPath === '/') {
    require_once __DIR__ . '/controllers/GameController.php';
    $controller = new GameController();
    $controller->showAll();
}
