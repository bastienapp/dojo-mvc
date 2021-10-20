<?php

require_once __DIR__ . '/../models/GameModel.php';

class GameController
{
    private GameModel $model;

    public function __construct()
    {
        $this->model = new GameModel();
    }

    public function showAll()
    {
        $games = $this->model->getAll();

        require_once __DIR__ . '/../views/home.php';
    }
}
