<?php
require_once __DIR__ . '/../models/GameModel.php';
class GameController
{
    private GameModel $model;
    public function __construct()
    {
        $this->model = new GameModel();
    }
    public function browse()
    {
        $games = $this->model->browseGames();
        require_once __DIR__ . '/../views/home.php';
    }
}
