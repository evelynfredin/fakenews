<?php

declare(strict_types=1);

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

    public function sortBy(string $table, string $column, int $limit): array
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table} ORDER BY {$column} DESC LIMIT {$limit}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id): object
    {
        $statement = $this->pdo->prepare("SELECT * FROM posts WHERE id = {$id}");
        $statement->execute();
        $result = $statement->fetchObject();

        if (!$result) {
            $result = new stdClass;
        }

        return $result;
    }

    public function excludeActivePost(int $id): array
    {
        $statement = $this->pdo->prepare("SELECT * FROM posts WHERE id != {$id}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
