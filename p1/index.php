<?php

abstract class bangunDatar{
    // abstract function luas();
    // abstract function keliling();
    
}

class segiTiga extends bangunDatar{
    function luas(){
        $alas = 10;
        $tinggi = 5;
        $luas = .5 * $alas * $tinggi;
        echo $luas . "<br>";
        return $luas;
    }
    // function keliling(){

    // }
}

class trapesium extends bangunDatar{
    function luas($alas, $tinggi){
        $luas = $alas * $tinggi;
        // echo $luas;
        return $luas;
    }
    // function keliling(){

    // }
}

$segi3 =  new segiTiga;
// $segi3->luas();

$trapes = new trapesium;
echo ($trapes->luas(2,4) + $trapes->luas(2,4)) ;


