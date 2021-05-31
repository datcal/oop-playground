<?php

namespace datcal\Tests\Unit;

use PHPUnit\Framework\TestCase;

/**
 * Class UnitTest
 *
 * @package datcal\Tests
 */
class UnitTest extends TestCase
{
    /** @test
     * test push and pop
     */
    public function testPushAndPop()
    {
        $stack = [];
        $this->assertSame(0, count($stack));
    }
}