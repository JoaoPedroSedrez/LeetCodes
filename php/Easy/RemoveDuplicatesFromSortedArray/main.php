<?php
function removeDuplicates(&$nums) {
    $k = 0;

    for ($i = 0; $i < count($nums); $i++) {
        if ($i == 0 || $nums[$i] != $nums[$i-1]) {
            $nums[$k] = $nums[$i];  // copia para a posição $k
            $k++;
        }
    }
    // Remove elementos extras do final
    $nums = array_slice($nums, 0, $k);

    print_r($nums);
    echo $k;
}

$nums = [0,0,1,1,1,2,2,3,3,4];
echo removeDuplicates($nums);