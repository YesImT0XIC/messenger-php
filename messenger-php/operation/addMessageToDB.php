<?php
session_start();
$host = 'localhost'; // адрес сервера
$database = 'id15438434_messenger'; // имя базы данных
$user = 'id15438434_phpmessenger'; // имя пользователя
$password = '[hIrWo1$E^|EW63M'; // пароль
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

$message = $_POST["message"];
$nameAuthor = $_SESSION['user']['name'];
$linkChat = $_SESSION['linkChat'];
$time = date('H:i - d.m.Y');

mysqli_query($link, "INSERT INTO $linkChat VALUES ('$nameAuthor', '$message', '$time')");

header('Location: ../chats/'.$linkChat.'.php');



?>