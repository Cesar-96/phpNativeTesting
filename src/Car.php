<?php
use PHPUnit\Framework\TestCase;

class Car{
    protected $engieniers = [];
    protected $marca;
    public function __construct($marca1)
    {
        $this->marca=$marca1;
    }

    public function __getMarca(){
        return $this->marca;
    }

    public function attach(Enginier $enginier){
        $this->engieniers[] = $enginier;
    }

    public function firstFunction(){
        $this->showSomethingIsNotNormal('Algo esta pasando');
    }

    public function showSomethingIsNotNormal($stringPhare){
        return $stringPhare;
    }
}