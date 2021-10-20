<?php

require_once __DIR__ . '/../../config.php';

class GameModel
{
    private PDO $connection;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=" . DBNAME . ";charset=UTF8", USER, PWD);
    }

    public function getAll(): array
    {
        $statement = $this->connection->query('SELECT * FROM game');
        $allGames = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        return $allGames;
    }
}
