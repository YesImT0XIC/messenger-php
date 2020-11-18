<?php
session_start();
if(isset($_SESSION['user'])){
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Регистарция</title>
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
<body class="bfg-light">
<br>
<br>
<br>
<br><br>
<br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 border bg-white">
                <form action="operation/registr.php" method="post">
                    <img class="mx-auto d-block" src="images/1497619998-jd16_85180.png" alt="" width="100" height="100">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Логин</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Пароль</label>
                        <input type="password" class="form-control" name="pass">
                    </div>
                    <button type="submit" class="btn btn-primary mx-auto d-block">Зарегистрироваться</button>
                    <br>
                    <div class="text-center"><p><a href="avtor.php" class="text-center">Войти</a>, если вы зерегистрированы</p></div>
                    <?php
                    if(isset($_SESSION['message'])){
                        echo '<p>' . $_SESSION['message'] . '</p>';
                        unset($_SESSION['message']);
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>