<?php
    $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
    // filter_var - ������� html-�������
    //trim - ������� �������
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_STRING);
    //$password = md5($password."sdfsdfsdfsd"); // ����������� ������
    $mysqli = new mysqli('localhost', 'root', '', 'usersbase');
    $mysqli->query("INSERT INTO `users` (`username`, `password`, `mail`) "
            . "VALUES('$username', '$password', '$mail')");
    $mysqli->close();
    
    header('Location: /');
    exit();
?>