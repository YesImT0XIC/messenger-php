<?php
session_start();
$host = 'localhost'; // адрес сервера
$database = 'id15438434_messenger'; // имя базы данных
$user = 'id15438434_phpmessenger'; // имя пользователя
$password = '[hIrWo1$E^|EW63M'; // пароль
 $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

 $email = $_POST["email"];
 $pass = $_POST["pass"];

 $check_email_and_pass = mysqli_query($link,"SELECT * FROM users WHERE email = '$email' AND pass = '$pass'") or die("Ошибка " . mysqli_error($link));

 if(mysqli_num_rows($check_email_and_pass) > 0 ){
   $user = mysqli_fetch_assoc($check_email_and_pass);
   $_SESSION['user'] = ["id" => $user['id'], "name" => $user['name'], "email" => $user['email']];
   header('Location: ../index.php');
 }
 else{
    $_SESSION['message'] = "Неверно введен логин или пароль";
    header('Location: ../sign.php');
   }

 mysqli_close($link);
