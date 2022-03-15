<?php
    $array = [7, 1, 8, 13, 5, 25, 77, 81, 9];
    echo array_sum($array) / sizeof($array) . "\n";

    echo array_sum(range(1, 100)) . "\n";

    $arr = [49, 64, 4, 25];
    print_r(array_map('sqrt', $arr));
    echo "\n";

    $nums = range(1, 26);
    $keys = range('a', 'z');
    $array1 = array_combine($keys, $nums);
    print_r($array1);
    echo "\n";

    $str = "1234567890";
    $array2 = str_split($str, 2);
    $result = array_sum($array2);
    echo $result;
?>
