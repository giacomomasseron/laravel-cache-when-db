<?php

use GiacomoMasseroni\LaravelCacheWhenDb\Helpers\Services;
use GiacomoMasseroni\LaravelCacheWhenDb\Libs\Cache\ApiUseCaseManagementCacheFacade;
use Illuminate\Support\Facades\Cache;

class CacheTest extends \Orchestra\Testbench\TestCase
{
    public function test_success()
    {
        /*$cache = ApiUseCaseManagementCacheFacade::instance();
        $cache->boot();

        // Half an hour
        $cacheSeconds = 1800;
        $bearerToken = '524fcabd-8311-434a-8ad1-333d6bbc';
        $oldCallerIdUser = 910;

        $callerIdUser = Cache::remember($bearerToken, $cacheSeconds, static function () use ($bearerToken) {
            echo "\n" . 'Call external service' . "\n";

            $response = Services::getInstance()->callService(
                'https://apistaging.crurated.com/v2/users/myInfo/',
                $bearerToken,
            );

            return $response['result']['id_user'];
        });

        $this->assertSame($callerIdUser, $oldCallerIdUser);

        $cache->clean();*/
    }
}
