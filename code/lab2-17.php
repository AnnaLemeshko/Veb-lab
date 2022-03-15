<?php
    $array = ['x', 'xx', 'xxx', 'xxxx', 'xxxxx', 'xxxxxx', 'xxxxxxx', 'xxxxxxxx', 'xxxxxxxxx'];

    $arr = [];
    function arrayFull($str, int $k){
        for ($i = 0; $i <= $k; $i++) {
            $arr[] = $str;
        }
        return $arr;
    }
    printArray(arrayFill("x", 5)) . "\n";
   
    $array1 = [[1, 2, 3], [4, 5], [6]];
    $sum = 0;
    foreach($array1 as $value){
        foreach ($value as $num){
            $sum += $num;
        }
    }
    echo $sum . "\n";

    $array2 = [];
    $nums = 1;
    for($i = 0; $i < 3; $i++){
        for($j = 0; $j < 3; $j++){
            $array2[$i][$j] = $nums++;
        }
    }
    print_r($array2);
    echo "\n";

    $array3 = [2, 5, 3, 9];
    $result = $array3[0] * $array3[1] + $array3[2] * $array3[3];
    echo $result . "\n";

    $user = ['Name' => 'Анна', 'Surname' => 'Лемешко', 'Patronymic' => 'Александровна', 07, 07, 2002];
    echo $user['Surname'] . " " . $user['Name'] . " " . $user['Pftronymic'] . "\n";

    $date = ['Year' => '2022', 'Month' => '03', 'Day' => '15'];
    echo "{$date['Year']}-{$date['Month']}-{$date['Day']}\n";

    $array4 = ['a', 'b', 'c', 'd', 'e'];
    $val = count($array4);
    echo $val . "\n";

    echo $array4[sizeof($array4) - 1] . "\n";
    echo $array4[sizeof($array4) - 2] . "\n";
