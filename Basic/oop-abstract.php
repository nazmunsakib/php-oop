<?php 

abstract class calculator{
   abstract function getSum($x, $y);
   abstract function getMunias($x, $y);
}

class calculation extends calculator{
    
    function getSum($basNo=0, $clNo=0){
        echo $basNo + $clNo;
        echo PHP_EOL;
    }
    function getMunias($basNo=0, $clNo=0){
        echo $basNo - $clNo;
        echo PHP_EOL;
    }
}

$cl = new calculation();
$cl->getSum(3,696);
$cl->getMunias(80, 10);
