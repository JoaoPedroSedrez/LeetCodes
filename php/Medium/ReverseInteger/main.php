<?php
function reverseString($x) {
    $INT_MAX = 2147483647;
    $INT_MIN = -2147483648;

    // Converte para string e trata sinal
    $str = strval(abs($x));
    $reversed = strrev($str);
    $result = intval($reversed);

    // Aplica o sinal original
    if ($x < 0) {
        $result = -$result;
    }

    // Verifica overflow
    if ($result > $INT_MAX || $result < $INT_MIN) {
        return 0;
    }

    return $result;
}

echo "\n=== Solução com String ===\n";
echo "reverseString(123) = " . reverseString(123) . "\n";
echo "reverseString(-123) = " . reverseString(-123) . "\n";
echo "reverseString(120) = " . reverseString(120) . "\n";
echo "reverseString(1534236469) = " . reverseString(1534236469) . "\n";
