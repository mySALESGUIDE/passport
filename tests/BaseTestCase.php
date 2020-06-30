<?php

use ORT\Interactive\Couchbase\Eloquent\Model;

abstract class BaseTestCase extends \PHPUnit\Framework\TestCase
{

    public function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

}
