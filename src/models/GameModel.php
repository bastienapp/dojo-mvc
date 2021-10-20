<?php

class GameModel
{
    private PDO $connection;

    public function __construct()
    {
        $this->connection = new PDO('mysql:dbname=' . DBNAME . ';host=localhost; charset=UTF8;', USER, PWD);
    }

    public function browseGames(): array
    {
        $query = 'SELECT * FROM `game`;';
        $statement = $this->connection->query($query);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function showGame($id): array
    {
        $query = 'SELECT * FROM game where id = :id';
        $statement = $this->connection->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}
