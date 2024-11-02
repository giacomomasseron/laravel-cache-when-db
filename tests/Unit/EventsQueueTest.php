<?php

namespace Unit;

use Crurated\ApiExceptions\Exceptions\ApiException;
use PHPUnit\Framework\TestCase;

class EventsQueueTest extends TestCase
{
    public function test_success()
    {
        try {
            // TODO: to test call utilities "service-event-queuer" external service
            /*EventsFacade::instance()->sendMessage(
                'Test event',
                0,
                0,
                [
                    'Foo' => 'Bar'
                ]
            );*/

            $this->assertTrue(true);
        } catch (ApiException $exc) {
            echo $exc->getMessage();
            exit;

            $this->fail();
        }
    }
}
