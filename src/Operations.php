<?php

class Operations
{
//    public function factorial($number){
////        $result=1;
////        for($i=$number;i>1;$i--)
////        {
////            $result*=$i;
////        }
//        return 120;
//    }
    public function factorial($n)
    {
        if (is_int($n) && $n >= 0) {
            $factorial = 1;
            for ($i = 2; $i <= $n; $i++) {
                $factorial *= $i;
            }
            return $factorial;
        } else {
            throw new
            InvalidArgumentException('You should pass non-negative integer');
        }
    }
    public function isPerfect($number){
        $divisores=0;
        if(is_int($number) && $number>=0) {
            for ($i = 1; $i <= $number; $i++) {
                if ($number % $i == 0) {
                    $divisores += 1;
                }
            }
        }else{
            throw new
            InvalidArgumentException('You should pass non-negative integer');
        }
        if($divisores==1){
            return 1;
        }
        else{
            return 0;
        }

    }

}