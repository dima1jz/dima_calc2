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

function substraction($num1, $num2) {

    if ($num1 == "" || $num2 == "") {

        return "Введите два числа.";
    }

    if (!is_numeric($num1) || !is_numeric($num2)) {

        return "Символы и буквы запрещены. Введите два числа.";
    }

    $result = $num1 - $num2;
    return "Результат вычислений: $result";
}

function multiplication($num1, $num2) {

    if ($num1 == "" || $num2 == "") {

        return "Введите два числа.";
    }

    if (!is_numeric($num1) || !is_numeric($num2)) {

        return "Символы и буквы запрещены. Введите два числа.";
    }

    $result = $num1 * $num2;
    return "Результат вычислений: $result";
}

function division($num1, $num2) {

    if ($num1 == "" || $num2 == "") {

        return "Введите два числа.";
    }

    if (!is_numeric($num1) || !is_numeric($num2)) {

        return "Символы и буквы запрещены. Введите два числа.";
    }

    if ($num2 == 0) {

        return "Деление на 0 запрещено. Введите два числа.";
    }

    $result = $num1 / $num2;
    return "Результат вычислений: $result";
}
?>