<?php

declare(strict_types=1);

namespace GiacomoMasseroni\LaravelCacheWhenDb;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class LaravelCacheWhenDbServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-cache-when-db.php', 'laravel-cache-when-db');
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/laravel-cache-when-db.php' => config_path('laravel-cache-when-db.php'),
        ]);

        DB::listen(function (QueryExecuted $query): void {
            if (LaravelCacheWhenDb::queryChangedDatabase($query->sql)) {
                LaravelCacheWhenDb::cleanCache($query->sql);
            }
        });
    }
}
