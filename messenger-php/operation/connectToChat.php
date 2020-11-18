<?php
session_start();
$host = 'localhost'; // адрес сервера
$database = 'id15438434_messenger'; // имя базы данных
$user = 'id15438434_phpmessenger'; // имя пользователя
$password = '[hIrWo1$E^|EW63M'; // пароль
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

$connectLink = $_POST["connect"];
$_SESSION['linkChat'] = $connectLink;

header('Location: ../chats/'.$connectLink.'.php');