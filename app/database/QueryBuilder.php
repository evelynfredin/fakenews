<?php

class QueryBuilder
{
    protected $pdo;
    public function __construct(object $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll(string $table): array
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectOrderAndLimit(string $table, string $column, int $amount): array
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table} ORDER BY {$column} DESC LIMIT {$amount}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM posts WHERE id = {$id}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS)[0];
    }

    public function excludeActivePost(int $id): array
    {
        $statement = $this->pdo->prepare("SELECT * FROM posts WHERE id != {$id}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
