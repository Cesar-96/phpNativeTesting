<?php

use PHPUnit\Framework\TestCase;

class MyFirstTests extends TestCase{
    public function testFirst()
    {
        $this->assertTrue(true);
    }
    public function testSecond(){
        $this->assertIsArray([]);
    }
    public function testThird(){
        $this->assertIsArray([],'Esta salida deberia ser un array');
    }
    public function testFourth(){
        $this->assertIsString('lover','this need to be string');
    }
    public function testFifth(){
        $this->assertStringStartsWith("A","Andres");
    }
    public function testSixth(){
        $array=[
          //"error"=>"Esto es un error de salida"
            "data"=>[]
        ];
        $this->assertArrayHasKey("data",$array);
    }

}