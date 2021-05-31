<?php

namespace datcal\Tests\Feature;
use PHPUnit\Framework\TestCase;


class FeatureTest extends TestCase
{
    /** @test
     * first feature test
     */
    public function first_feature_test1()
    {
        $stack = [];
        $this->assertSame(0, count($stack));
    }
}