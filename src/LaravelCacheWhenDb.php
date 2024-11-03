<?php

declare(strict_types=1);

namespace GiacomoMasseroni\LaravelCacheWhenDb;

use Illuminate\Support\Facades\Cache;

class LaravelCacheWhenDb
{
    public static function queryChangedDatabase(string $sql): bool
    {
        $sql = strtoupper($sql);

        return str_starts_with($sql, 'INSERT') || str_starts_with($sql, 'UPDATE') || str_starts_with($sql, 'DELETE');
    }

    public static function cleanCache(string $sql): void
    {
        /**
         * @var string $key
         * @var array<string> $dbTables
         */
        foreach (config('laravel-cache-when-db', []) as $key => $dbTables) {
            $clean = false;

            foreach ($dbTables as $dbTable) {
                if (self::sqlContainsTable($sql, $dbTable)) {
                    $clean = true;
                    break;
                }
            }

            if ($clean) {
                Cache::forget($key);
            }
        }
    }

    private static function sqlContainsTable(string $sql, string $dbTable): bool
    {
        return str_contains($sql, $dbTable);
    }
}
