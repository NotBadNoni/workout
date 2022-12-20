<?php 
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    $pass1 = filter_var(trim($_POST['pass1']),
    FILTER_SANITIZE_STRING);

    if($pass == $pass1){
        $pass = md5($pass."hjkl12");

        $connect = new mysqli('localhost', 'root', '', 'register-db') or die("Unable to connect!");
        $connect->query("INSERT INTO `users`(`login`, `pass`, `name`) VALUES ('$login', '$pass', '$name')");
        $connect->close();   
        
        header ('Location: http://localhost/front/web/signIn.html');
    }else{
        header ('Location: http://localhost/front/web/signIn.html');
    }
?>