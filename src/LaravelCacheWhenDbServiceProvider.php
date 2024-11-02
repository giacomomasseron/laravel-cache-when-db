<?php

declare(strict_types=1);

namespace Crurated\ApiUseCaseManagement;

use GiacomoMasseroni\LaravelCacheWhenDb\LaravelCacheWhenDb;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class LaravelCacheWhenDbServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-cache-when-db');
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-cache-when-db'),
            ]);

            DB::listen(function ($query): void {
                if (LaravelCacheWhenDb::queryChangedDatabase($query->sql)) {
                    LaravelCacheWhenDb::clearCache($query->sql);
                }
            });
        }
    }
}
