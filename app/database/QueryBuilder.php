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

    public function selectOrderAndLimit($table, $column, $amount)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table} ORDER BY {$column} DESC LIMIT {$amount}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById($id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM posts WHERE id = {$id};");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS)[0];
    }

    public function excludeActivePost($id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM posts WHERE id != {$id}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
