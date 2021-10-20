<?php

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
require_once __DIR__ . "/controllers/GameController.php";

if ('/' === $urlPath) {
    $controller = new GameController();
    $controller->browse();
} elseif ('/show' === $urlPath && isset($_GET['id'])) {
    // var_dump($model->showGame($_GET['id']));
}
