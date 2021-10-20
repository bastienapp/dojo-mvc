<?php

require_once __DIR__ . '/../models/GameModel.php';

class GameController
{
    private GameModel $gameModel;

    public function __construct()
    {
        $this->gameModel = new GameModel();
    }
    
    public function showAll()
    {
        $games = $this->gameModel->getAll();
    
        require_once __DIR__ . '/../views/games.php';
    }
}
