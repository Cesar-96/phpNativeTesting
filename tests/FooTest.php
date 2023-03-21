<?php
use PHPUnit\Framework\TestCase;
class FooTest extends TestCase
{
    public function testIdenticalObjectPassed()
    {
        $expectedObject = new stdClass;
        $mock = $this->getMockBuilder(stdClass::class)
            ->setMethods(['foo'])
            ->getMock();
        $mock->expects($this->once())
            ->method('foo')
            ->with($this->identicalTo($expectedObject));
        $mock->foo($expectedObject);
    }

    public function testIdenticalObjectPassed1()
    {
        $cloneArguments = true;
        $mock = $this->getMockBuilder(stdClass::class)
            ->enableArgumentCloning()
            ->getMock();
        // now your mock clones parameters so the identicalTo constraint
        // will fail.
    }
}