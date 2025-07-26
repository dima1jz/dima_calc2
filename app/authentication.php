<?php 
include 'head.php';
include 'navbar.php';
echo "<br>";
?>

<form action="" method="POST">
    <input type="text" placeholder="Логин" name="login"><br><br>
    <input type="password" placeholder="Пароль" name="password"> <br><br>
    <input type="submit" value="Отправить">
</form>

<?php

if (empty($_POST)) {

    echo "Введите логин и пароль.";
    exit;
}

$login = "";
$pass = "";

if (array_key_exists('login', $_POST)) {

    $login = $_POST['login'];
}

if (array_key_exists('password', $_POST)) {

    $pass = $_POST['password'];
}

if ($login == "" || $pass == "") {

    echo "Поля пустые. Введите логин и пароль";
    exit;
}

$array = [
    'dima' => '123',
    'olya' => '321'
                    ];

foreach ($array as $key => $value) {

    if ($key == $login && $value == $pass) {

        echo "Вы успешно аутентифицированы.";
        exit;
    }
}

echo "Логин и пароль не верные. Попробуйте заново.";

/*
1. При запросе страницы открывается форма c текстом о вводе логина и пароля. 
Если массив Пост пустой - сообщение ""Введите логин и пароль".
*/
?>
