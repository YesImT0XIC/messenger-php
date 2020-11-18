<?php
session_start();
if(isset($_SESSION['user']) == false){
    header('Location: ../avtor.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Подключение</title>
    <meta charset="UTF-8">

    <!--===============================================================================================-->
    <link rel="icon" href="images/icons/message_unread_email_envelope_text_icon_124640.ico"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/reg.css">
</head>
<body class="bfg-light text-center">
<div class="headd">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="index.php">Мессенджер</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="col-10"></div>
        <form class="form-inline my-2 my-lg-0" action="operation/logout.php">
            <div class="name-tag">
            <?php
            echo $_SESSION['user']['name'];
            ?>
            </div>
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Выход</button>
        </form>
    </div>
</nav>
</div>
<br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4 border bg-white">
            <br>
            <form action="operation/createChat.php" method="post">
                <div class="form-group font">
                    <label for="exampleInputPassword1">Создать беседу</label>
                    <input type="text" class="form-control" name="create" placeholder="Введите название беседы">
                </div>
                <button type="submit" class="btn btn-primary mx-auto d-block">Создать</button>
                <br>
                <hr>
            </form>
            <form action="operation/connectToChat.php" method="post">
                <div class="form-group font">
                    <label for="exampleInputPassword1">Присоединиться к беседе</label>
                    <input type="text" class="form-control" name="connect" placeholder="Введите название беседы">
                </div>
                <button type="submit" class="btn btn-primary mx-auto d-block">Перейти</button>
                <br>
            </form>
        </div>
    </div>
</div>
</body>
</html>
