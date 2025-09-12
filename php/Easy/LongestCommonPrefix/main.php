<?php

function longestCommonPrefix($strs) {
    // Primeiro: encontrar o tamanho da menor string
    $minLength = PHP_INT_MAX;
    foreach ($strs as $str) {
        if (strlen($str) < $minLength) {
            $minLength = strlen($str);
        }
    }

    $result = '';

    // Agora: para cada posição até $minLength
    for ($pos = 0; $pos < $minLength; $pos++) {

        // Pegar o caractere da primeira string nesta posição
        $currentChar = $strs[0][$pos];

        // Comparar com todas as outras strings
        foreach ($strs as $str) {
            if ($str[$pos] != $currentChar) {
                return $result;  // Para aqui!
            }
        }

        // Se chegou aqui, todos são iguais
        $result .= $currentChar;
    }

    return $result;
}

// Testes
echo "Resultado: '" . longestCommonPrefix(['flower', 'flower', 'flower']) . "'\n\n";
echo "Resultado: '" . longestCommonPrefix(['dog', 'racecar', 'car']) . "'\n\n";

?>