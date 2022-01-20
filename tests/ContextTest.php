<?php

namespace Tests;

use Gravatalonga\WatcherChecker\Entities\Context;
use Gravatalonga\WatcherChecker\Entities\NotificationContext;
use Gravatalonga\WatcherChecker\Entities\ServerContext;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Gravatalonga\WatcherChecker\Entities\Context
 * @covers \Gravatalonga\WatcherChecker\Entities\ServerContext
 * @covers \Gravatalonga\WatcherChecker\Entities\NotificationContext
 */
class ContextTest extends TestCase
{
    /**
     * @test
     */
    public function can_create_context ()
    {
        $context = Context::hydrate([
           'domain' => 'jonathan.pt',
           'server' => [
               'host' => 'jonathan.pt',
               'user' => 'other',
               'privateKey' => '123456',
               'password' => '123456',
               'primary' => true
           ],
           'notifications' => [
              [
                  'type' => 'email',
                  'service' => 'mailgun',
                  'username' => 'user',
                  'password' => '1234',
                  'from' => 'testing@testing.com',
                  'to' => 'geral@example.com'
              ]
           ]
        ]);

        $this->assertInstanceOf(Context::class, $context);
        $this->assertEquals('jonathan.pt', $context->domain);
        $this->assertInstanceOf(ServerContext::class, $context->server);
        $this->assertInstanceOf(NotificationContext::class, $context->notifications[0]);
        $this->assertEquals('jonathan.pt', $context->server->host);
        $this->assertEquals('other', $context->server->user);
        $this->assertEquals('123456', $context->server->privateKey);
        $this->assertEquals(true, $context->server->primary);
    }
}