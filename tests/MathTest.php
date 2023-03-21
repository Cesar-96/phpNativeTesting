<?php

use PHPUnit\Framework\TestCase;
use src\Math;

include_once '../src/Math.php';

class MathTest extends TestCase
{
    public $fixtures;

    public function testFibonacci()
    {
        $math = new Math();
        $this->assertEquals(34, $math->fibonacci(9));
    }

    public function testFactorial()
    {
        $math = new Math();
        $this->assertEquals(120, $math->factorial(5));
    }

    public function testFactorialGreaterThanFibonacci()
    {
        $math = new Math();
        $this->assertTrue($math->factorial(6) > $math->fibonacci(6));
    }

    /**
     * test with data from dataProvider
     * @dataProvider providerFibonacci
     */
    public function testFibonacciWithDataProvider($n, $result) {
        $math = new Math();
        $this->assertEquals($result, $math->fibonacci($n));
    }

    public function providerFibonacci() {
        return array(
            array(1, 1),
            array(2, 1),
            array(3, 2),
            array(4, 3),
            array(5, 5),
            array(6, 8),
            array(7,13),
        );
    }
//    public function testExceptionsForNegativeNumbers() {
////        $this->expectException(InvalidArgumentException::class);
//        $math = new Math();
////        $math->fibonacci(-1);
//    }

//    public function testFailedForZero() {
////        $this->expectException(InvalidArgumentException::class);
//        $math = new Math();
//        $math->factorial(0);
//    }


//    protected function setUp() {
//        $this->fixtures = [];
//    }
//    protected function tearDown() {
//        $this->fixtures = NULL;
//    }
//    public function testEmpty() {
//        $this->assertTrue($this->fixtures == []);
//    }


}
