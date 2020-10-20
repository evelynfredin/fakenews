<?php

class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectPublic($table, $row)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table} WHERE {$row} = TRUE");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
