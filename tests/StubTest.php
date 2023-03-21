<?php

include './src/SomeClass.php';

use PHPUnit\Framework\TestCase;
class StubTest extends TestCase
{
    public function testStub()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->createMock(SomeClass::class);
        // Configure the stub.
        $stub->method('doSomething')
            ->willReturn('foo');
        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals('foo', $stub->doSomething());
    }
    public function testStub1()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->getMockBuilder(SomeClass::class)
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->disableArgumentCloning()
            ->disallowMockingUnknownTypes()
            ->getMock();
        // Configure the stub.
        $stub->method('doSomething')
            ->willReturn('foo');
        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals('foo', $stub->doSomething());
    }

    public function testReturnArgumentStub()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->createMock(SomeClass::class);
        // Configure the stub.
        $stub->method('doSomething')
            ->will($this->returnArgument(0));
        // $stub->doSomething('foo') returns 'foo'
        $this->assertEquals('foo', $stub->doSomething('foo'));
        // $stub->doSomething('bar') returns 'bar'
        $this->assertEquals('bar', $stub->doSomething('bar'));
    }

    public function testReturnSelf()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->createMock(SomeClass::class);
        // Configure the stub.
        $stub->method('doSomething')
            ->will($this->returnSelf());
        // $stub->doSomething() returns $stub
        $this->assertSame($stub, $stub->doSomething());
    }

    public function testReturnValueMapStub()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->createMock(SomeClass::class);
        // Create a map of arguments to return values.
        $map = [
            ['a', 'b', 'c', 'd'],
            ['e', 'f', 'g', 'h']
        ];
        // Configure the stub.
        $stub->method('doSomething')
            ->will($this->returnValueMap($map));
        // $stub->doSomething() returns different values depending on
        // the provided arguments.
        $this->assertEquals('d', $stub->doSomething('a', 'b', 'c'));
        $this->assertEquals('h', $stub->doSomething('e', 'f', 'g'));
    }

    public function testReturnCallbackStub()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->createMock(SomeClass::class);
        // Configure the stub.
        $stub->method('doSomething')
            ->will($this->returnCallback('str_rot13'));
        // $stub->doSomething($argument) returns str_rot13($argument)
        $this->assertEquals('fbzrguvat', $stub->doSomething('something'));
    }


    public function testOnConsecutiveCallsStub()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->createMock(SomeClass::class);
        // Configure the stub.
        $stub->method('doSomething')
            ->will($this->onConsecutiveCalls(2, 3, 5, 7));
        // $stub->doSomething() returns a different value each time
        $this->assertEquals(2, $stub->doSomething());
        $this->assertEquals(3, $stub->doSomething());
        $this->assertEquals(5, $stub->doSomething());
        $this->assertEquals(7, $stub->doSomething());
        //$this->assertEquals(9, $stub->doSomething());
    }

//    public function testThrowExceptionStub()
//    {
//        // Create a stub for the SomeClass class.
//        $stub = $this->createMock(SomeClass::class);
//        // Configure the stub.
//        $stub->method('doSomething')
//            ->will($this->throwException(new Exception));
//        // $stub->doSomething() throws Exception
//        $stub->doSomething();
//    }



}
