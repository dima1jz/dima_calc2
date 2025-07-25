<?php

function addition($num1, $num2) {

    if ($num1 == "" || $num2 == "") {

        return "Введите два числа.";
    }

    if (!is_numeric($num1) || !is_numeric($num2)) {

        return "Символы и буквы запрещены. Введите два числа.";
    }

    $result = $num1 + $num2;
    return "Результат вычислений: $result";
}

?>