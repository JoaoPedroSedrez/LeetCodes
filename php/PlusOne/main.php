<?php
function plusOne($s) {

    $sum = 0;
    $finalArray = [];
    for ($i = 0; $i < count($s); $i++) {
        $exponent= count($s) - $i;
        $sum += ($s[$i] * pow(10,$exponent)) / 10;
    }
    $sum += 1;

    foreach (str_split($sum) as $digit) {
        array_push($finalArray, $digit);
    }

    return $finalArray;

}
 print_r(plusOne([9]));