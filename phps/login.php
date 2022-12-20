<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);


    $pass = md5($pass."hjkl12");

    $connect = new mysqli('localhost', 'root', '', 'register-db') or die("Unable to connect!");

    $result = $connect->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

    $user = $result->fetch_assoc();
    if (count ($user) == 0) {
        echo "Такой пользователь не найден";
        exit();
    }

    setcookie('users', $user ['name'], time () + 3600, "/");

    $connect->close();

    header ('Location: http://localhost/front/web/userHome.php');
?>