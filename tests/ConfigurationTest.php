<?php

namespace Tests;

use Gravatalonga\WatcherChecker\Entities\ConfigurationContext;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Gravatalonga\WatcherChecker\Entities\ConfigurationContext
 */
class ConfigurationTest extends TestCase
{
    /**
     * @test
     */
    public function can_create_configuration_from_array ()
    {
        $configurationContext = ConfigurationContext::hydrate([
            'type' => 'ping',
            'name' => 'Ping Low!',
            'level' => 100,
            'config' => [
                'url' => 'testing'
            ],
            'success' => 'response.statusCode >= 200 && response.statusCode < 300',
            'notify' => ['email']
        ]);

        $this->assertInstanceOf(ConfigurationContext::class, $configurationContext);
        $this->assertEquals('ping', $configurationContext->type);
        $this->assertEquals('Ping Low!', $configurationContext->name);
        $this->assertEquals(100, $configurationContext->level);
        $this->assertEquals(['url' => 'testing'], $configurationContext->config);
        $this->assertEquals('response.statusCode >= 200 && response.statusCode < 300', $configurationContext->success);
        $this->assertEquals(['email'], $configurationContext->notify);
    }
}