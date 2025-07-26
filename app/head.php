<?php

$title = "Калькулятор";
$content = "Калькулятор";

if ($_SERVER['SCRIPT_NAME'] == "/index.php") {

    $title = "Калькулятор";
    $content = "Калькулятор";
}

if ($_SERVER['SCRIPT_NAME'] == "/addition.php") {

    $title = "Сложение";
    $content = "Сложение";
}

if ($_SERVER['SCRIPT_NAME'] == "/substraction.php") {

    $title = "Вычитание";
    $content = "Вычитание";
}

if ($_SERVER['SCRIPT_NAME'] == "/multiplication.php") {

    $title = "Умножение";
    $content = "Умножение";
}

if ($_SERVER['SCRIPT_NAME'] == "/division.php") {

    $title = "Деление";
    $content = "Деление";
}

if ($_SERVER['SCRIPT_NAME'] == "/authentication.php") {

    $title = "Вход";
}

?>

<head>
    <meta charset="utf-8">
    <meta name="author" content="Belyaev Dmitry">
    <meta name="description" content="Онлайн калькулятор">
    <meta name="keywords" content="<?php echo $content; ?>">
    <title><?php echo $title; ?></title>
</head>