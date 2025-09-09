<?php

function romanToInt($s) {
    // Primeiro, vamos criar um mapa dos valores
    $values = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];

    $result = 0;
    $i = 0;
    $length = strlen($s);

    while ($i < $length) {
        if ($i + 1 < $length) {

            if ($values[$s[$i]] < $values[$s[$i+1]]) {
                $result += $values[$s[$i+1]] - $values[$s[$i]];
                $i += 2;
            } else {
                $result += $values[$s[$i]];
                $i += 1;
            }
        } else {
            $result += $values[$s[$i]];
            $i += 1;
        }
    }

    return $result;
}

// Testes
echo romanToInt("III") . "\n";      // Deveria ser 3
echo romanToInt("LVIII") . "\n";    // Deveria ser 58
echo romanToInt("MCMXCIV") . "\n";  // Deveria ser 1994

?>