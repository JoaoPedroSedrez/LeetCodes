<?php

function isValid($s) {
    $lista = [];

    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];

        // Se é abertura ( { [ → adiciona na lista
        if ($char == '(' || $char == '{' || $char == '[') {
            $lista[] = $char;
        }

        if ($char == ')' || $char == '}' || $char == ']') {

            if (empty($lista)) {
                return false;
            }

            $ultimo = array_pop($lista);

            if (($ultimo == '(' && $char == ')') ||
                ($ultimo == '{' && $char == '}') ||
                ($ultimo == '[' && $char == ']')) {

            } else {
                return false;
            }
        }
    }

    if (empty($lista)) {
        return true;
    } else {
        return false;
    }
}

// Teste
var_dump(isValid("([]{})"));

?>