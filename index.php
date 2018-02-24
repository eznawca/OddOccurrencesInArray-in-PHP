<?php
// write your code in PHP7.0
$aa = [9, 3, 9, 3, 9, 5, 9, 4,4,3,2,3,2];

function solution($A) {
    // write your code in PHP7.0
    $tmp = [];
    foreach ($A as $v) {
        if (empty($tmp[$v])){
            $tmp[$v] = 1;
        } else {
            $tmp[$v]++;
        }
    }
    foreach ($tmp as $k => $v) if ($v % 2 == 0) unset($tmp[$k]);
	return array_keys($tmp)[0];
}

print_r(solution($aa));