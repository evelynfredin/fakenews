<?php
require __DIR__ . '/../config.php';
class Connection
{
    public static function make($config)
    {
        try {
            return new PDO($config);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}
