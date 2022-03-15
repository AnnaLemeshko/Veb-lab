<?php
    function sumNum(int $a, int $b){
        if($a + $b > 10) return true;
        else return false;
    }
    
    function eqNum(int $a, int $b){
        if($a == $b) return true;
        else return false;
    }

    echo $test == 0 ? "верно\n" : "ложно\т";

    $age = rand(0, 150);
    $sum = 0;
    echo $age . "\n";
    if($age < 10) echo "{$age} < 10\n";
    else if($age > 99) echo "{$age} > 99\n";
    else{
        while($age > 0){
            $sum += $age % 10;
            $age /= 10;
        }
        echo ($sum > 9) ? "сумма цифр двузначная" : "сумма цифр однозначная";
    echo "\n";
  
    $arr = [5, 7, 8];
    if(count($arr) == 3) echo array_sum($arr);
?>
