<?php
function isPalindrome($x) {
    $arr = str_split($x);
    for ($i = 0; $i < count($arr) / 2; $i++) {
        if ($arr[$i] != $arr[count($arr) - 1 - $i]) {
            return false;
        }
     }
    return true;
}
echo isPalindrome(123321);
