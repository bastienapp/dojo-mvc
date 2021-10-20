<?php

require_once __DIR__ . '/../../connec.php';
require_once __DIR__ . '/AbstractModel.php';

class GameModel extends AbstractModel
{
    public function getAll(): array
    {
        $query = 'SELECT * FROM game';
        $statement = $this->getConnection()->query($query);
        $games = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $games;
    }
}

