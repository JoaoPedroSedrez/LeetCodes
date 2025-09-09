<?php
function twoSum($nums, $target) {
    for ($i = 0; $i < count($nums); $i++) {
        for ($j = $i + 1; $j < count($nums); $j++) {
            if ($nums[$i] + $nums[$j] == $target) { return [$i, $j]; }
        }
    }
    return [-1, -1];
}

print_r(twoSum([2,7,11,15], 9));