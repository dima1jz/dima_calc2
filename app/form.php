<?php

$num1 = "";
$num2 = "";

if (array_key_exists('number1', $_GET)) {

    $num1 = $_GET['number1'];
}

if (array_key_exists('number2', $_GET)) {

    $num2 = $_GET['number2'];
}

$action = "";

if ($_SERVER['SCRIPT_NAME'] == "/addition.php") {

    $action = "/addition.php";
}

?>
<form action="<?php echo $action ?>" method="GET">
    <br>
    <input type="text" placeholder="Введите первое число" name="number1" value="<?php echo $num1; ?>"><br><br>
    <input type="text" placeholder="Введите второе число" name="number2" value="<?php echo $num2; ?>"><br><br>
    <input type="submit" value="Посчитать">
    <input type="reset" value="Очистить">
</form>
<br>