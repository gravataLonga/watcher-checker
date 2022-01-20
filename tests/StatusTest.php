<?php

namespace Tests;

use Gravatalonga\WatcherChecker\Status;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Gravatalonga\WatcherChecker\Status
 */
class StatusTest extends TestCase
{
    /**
     * @test
     */
    public function can_create_status ()
    {
        $status = new Status(true, "It's ok", "There are here bigger message");

        $this->assertTrue($status->success());
        $this->assertEquals("It's ok", $status->subject());
        $this->assertEquals("There are here bigger message", $status->message());
    }

    /**
     * @test
     */
    public function not_successfully ()
    {
        $status = new Status(false, "", "");

        $this->assertFalse($status->success());
        $this->assertEquals("", $status->subject());
        $this->assertEquals("", $status->message());
    }
}