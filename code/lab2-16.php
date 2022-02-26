<?php
    function increaseEnthusiasm($str = "null"){
        return $str . "!";
    }
    echo increaseEnthusiasm("Салют") . "\n";

    function repeatThreeTimes($str = "null"){
        return $str . $str . $str;
    }
    echo repeatThreeTimes("УРА") . "\n";
    echo increaseEnthusiasm(repeatThreeTimes("Трындец")) . "\n";

    function cut($str = "null", $len = 10){
        return substr($str, 0, $len);
    }
    echo cut("рентгеноэлектрокардиографический") . "\n";

    $arr = [4, 5, 3, 90, -7, 77, 56, -1];
    function rec($arr, $i){
        if ($i >= count($arr)) return;
        echo $arr[$i];
        rec($arr, ++$i);
    }
    echo ($arr, 0) . "\n";

    $n = 777;
    function sum_nums($n, $summa = 0){
        while ($n > 0){
            $summa += $n % 10;
            $n /= 10; 
        }
        echo $summa . "\n";
        if ($summa > 9){
            sum_nums($summa);
        return;
    }
    echo sum_num($n);
?>
