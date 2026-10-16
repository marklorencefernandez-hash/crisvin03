<?php

namespace App\Database;

use PDO;

/** Week 12: raw PDO CRUD with parameterized values (no Eloquent). */
final class InventoryRepository
{
    public function __construct(private PDO $pdo)
    {
        $this->pdo->exec('CREATE TABLE IF NOT EXISTS inventory_items (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT NOT NULL,
            quantity INTEGER NOT NULL CHECK (quantity >= 0)
        )');
    }

    /** @return list<array{id: int, name: string, quantity: int}> */
    public function all(): array
    {
        return $this->pdo->query('SELECT id, name, quantity FROM inventory_items ORDER BY id DESC')->fetchAll();
    }

    /** @return array{id: int, name: string, quantity: int}|false */
    public function find(int $id): array|false
    {
        $statement = $this->pdo->prepare('SELECT id, name, quantity FROM inventory_items WHERE id = :id');
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch();
    }

    public function create(string $name, int $quantity): int
    {
        $statement = $this->pdo->prepare('INSERT INTO inventory_items (name, quantity) VALUES (:name, :quantity)');
        $statement->bindValue(':name', $name, PDO::PARAM_STR);
        $statement->bindValue(':quantity', $quantity, PDO::PARAM_INT);
        $statement->execute();
        return (int) $this->pdo->lastInsertId();
    }

    public function update(int $id, string $name, int $quantity): bool
    {
        $statement = $this->pdo->prepare('UPDATE inventory_items SET name = :name, quantity = :quantity WHERE id = :id');
        $statement->bindValue(':name', $name, PDO::PARAM_STR);
        $statement->bindValue(':quantity', $quantity, PDO::PARAM_INT);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->rowCount() > 0;
    }

    public function delete(int $id): bool
    {
        $statement = $this->pdo->prepare('DELETE FROM inventory_items WHERE id = :id');
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->rowCount() > 0;
    }
}
