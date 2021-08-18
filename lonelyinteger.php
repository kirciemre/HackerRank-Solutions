<?php

/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function lonelyinteger($a) {
    $arr1 = array();
    $arr2 = array();
        
        foreach ($a as $k) {
            if(array_key_exists($k, $arr1)) { // 'Unsetting from 1 and adding in 2
            unset($arr1[$k]);
                $arr2[$k] = $k;
            } else {
                $arr1[$k] = $k;
            }
        }
       
        foreach ($arr1 as $key){ //line:39 don't has implode function so send it singular
           return $key;
        }

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = lonelyinteger($a);

fwrite($fptr, $result . "\n");

fclose($fptr);
