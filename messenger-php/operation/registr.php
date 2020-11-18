<?php
session_start();
$host = 'localhost'; // адрес сервера
$database = 'id15438434_messenger'; // имя базы данных
$user = 'id15438434_phpmessenger'; // имя пользователя
$password = '[hIrWo1$E^|EW63M'; // пароль
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["pass"];

$check_name = mysqli_query($link,"SELECT * FROM users WHERE name = '$name'") or die("Ошибка " . mysqli_error($link));
$check_email = mysqli_query($link,"SELECT * FROM users WHERE email = '$email'") or die("Ошибка " . mysqli_error($link));

if(mysqli_num_rows($check_name) > 0 ){
    $_SESSION['message'] = "Пользователь с таким именем уже зарегистрирован";
}
else{
    if(mysqli_num_rows($check_email) > 0 ){
        $_SESSION['message'] = "Пользователь с таким адресом почты уже зарегистрирован";
    }
    else{
        mysqli_query($link, "INSERT INTO users VALUES (NULL, '$name', '$email', '$pass')");
        $check_email_and_pass = mysqli_query($link,"SELECT * FROM users WHERE email = '$email' AND pass = '$pass'") or die("Ошибка " . mysqli_error($link));
        $_SESSION['user']['name'] =  $_POST["name"];
        header('Location: ../index.php');
    }
}
header('Location: ../reg.php');