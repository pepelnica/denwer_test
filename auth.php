<?php
    $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    
    $mysql = new mysqli('localhost', 'root', '', 'usersbase');
    $result = $mysql->query("SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'");
    $user = $result->fetch_assoc();

    if(count($user) == 0){
        echo "такой пользователь не найден";
        exit();
    }
    
    setcookie('user', $user['username'], time() + 3600 * 24 * 30, "/");
    
    $mysql->close();
    header('Location: /');
    exit();
?>