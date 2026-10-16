<?php

namespace App\Database;

use PDO;

/** Small PDO factory: this is plain PHP PDO, not Laravel Eloquent. */
final class PdoSqliteFactory
{
    public static function connect(?string $path = null): PDO
    {
        $path ??= database_path('classroom_pdo.sqlite');
        $dsn = $path === ':memory:' ? 'sqlite::memory:' : 'sqlite:'.$path;
        $pdo = new PDO($dsn);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }
}
