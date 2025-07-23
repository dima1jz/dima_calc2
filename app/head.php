<?php

$title = "Калькулятор";

if ($_SERVER['SCRIPT_NAME'] == "/index.php") {

    $title = "Калькулятор";
}

if ($_SERVER['SCRIPT_NAME'] == "/addition.php") {

    $title = "Сложение";
}

if ($_SERVER['SCRIPT_NAME'] == "/substraction.php") {

    $title = "Вычитание";
}

if ($_SERVER['SCRIPT_NAME'] == "/multiplication.php") {

    $title = "Умножение";
}

if ($_SERVER['SCRIPT_NAME'] == "/division.php") {

    $title = "Деление";
}

?>

<head>
    <meta charset="utf-8">
    <meta name="author" content="Belyaev Dmitry">
    <meta name="description" content="Онлайн калькулятор">
    <meta name="keywords" content="Калькулятор">
    <title><?php echo $title; ?></title>
</head>