<?php

use PHPUnit\Framework\TestCase;

include './src/Operations.php';

class OperationTest extends TestCase{

    private $_expected =[
        2=>2,
        3=>6,
        4=>24,
        5=>120,
        6=>720,
        7=>5040
    ];

    public function testFactorialNumber(){
//        $number = 5;
//        $expected = 120;
        $operation= new Operations();
        foreach ($this->_expected as $number=>$expected)
        {
            $factorial = $operation->factorial($number);
            $this->assertIsInt($factorial);
            $this->assertEquals($expected,$factorial,"el factorial de $number debe ser $expected y no $factorial");
        }

    }

    public function testIsPerfectNumber(){
        $number = 10;
        $expected = 0;
        $operation=new Operations();
        $isperfect = $operation->isPerfect($number);
        $this->assertIsInt($isperfect);
        $this->assertEquals($expected,$isperfect);
    }

}