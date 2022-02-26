<?php
    $a = 10;
    $b = 3;
    echo $a . " делится на " . $b . " с останком " . ($a % $b) . "\n";

    if ($a % $b == 0):
        echo "Делится\n";
    else:
        echo "Делится с остатком " . ($a % $b) . "\n";

    echo $st = pow(2, 10) . "\n";
    echo sqrt(245) . "\n";
    $array = [4, 2, 5, 19, 13, 0, 10];
    $sum = 0;
    foreach ($array as $value){
        $sum += $value ** 2;
    }
    echo sqrt(sum) . "\n";
    
    $sq1 = sqrt(379);
    echo round($sq1) . "\n";
    echo round($sq1, 1) . "\n";
    echo round($sq1, 2) . "\n";
    $sq2 = sqrt(587);
    $fl = floor($sq2);
    $ce = ceil($sq2);
    $nums = array("Floor" => $fl, "Ceil" => $ce);
    foreach ($nums as $name => $value){
        echo $name . "=" . $value . "\n";
    }
    
    echo max(4, -2, 5, 19, -130, 0, 10) . "\n";
    echo min(4, -2, 5, 19, -130, 0, 10) . "\n";

    echo rand(1, 100);
    for ($i = 0; $i < 10; $i++){
        $mas[$i] = rand();
    }
    echo $mas . "\n";

    $a = 7;
    $b = 25;
    echo abs($a - $b) . "\n";
    $arr = [1, 2, -1, -2, 3, -3];
    foreach ($arr as $num){
        $num = abs($num);
    }

    $n = 79;
    $del = [];
    for ($i = 1; $i <= $n; $i++){
        if ($n % $i == 0){
            array_push($del, $i);
        }
    }
    echo $del . "\n";
    $muss = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $summa = 0;
    $i = 0;
    while ($summa <= 10){
        $summa += $muss[$j];
        $j++;
    }
?>
