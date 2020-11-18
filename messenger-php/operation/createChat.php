<?php
session_start();
$host = 'localhost'; // адрес сервера
$database = 'id15438434_messenger'; // имя базы данных
$user = 'id15438434_phpmessenger'; // имя пользователя
$password = '[hIrWo1$E^|EW63M'; // пароль
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

$creatLink= $_POST["create"];
$_SESSION['linkChat'] = $creatLink;

$sql = "CREATE TABLE $creatLink 
( `name` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
`text` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
`time` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL) ENGINE = InnoDB";

mysqli_query($link, $sql);

$filename = '../chats/'.$creatLink.'.php';
$text = '<?php
session_start();
if(isset($_SESSION[\'user\']) == false){
    header(\'Location: ../avtor.php\');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Чат</title>
    <meta charset="UTF-8">

    <!--===============================================================================================-->
    <link rel="icon" href="../images/icons/message_unread_email_envelope_text_icon_124640.ico"/>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../css/reg.css">
</head>
<body class="bfg-light text-center">
<div class="headd">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="../index.php">Мессенджер</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="col-10"></div>
        <form class="form-inline my-2 my-lg-0" action="../operation/logout.php">
            <div class="name-tag-chat">
            <?php
            echo $_SESSION[\'user\'][\'name\'];
            ?>
            </div>
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Выход</button>
        </form>
    </div>
</nav>
</div>
<br><br><br>


<div class="container">
    <?php
        $host = \'localhost\'; // адрес сервера
        $database = \'messenger\'; // имя базы данных
        $user = \'root\'; // имя пользователя
        $password = \'\'; // пароль;
        $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

        $nameAuthor = $_SESSION[\'user\'][\'name\'];
        $linkChat = $_SESSION[\'linkChat\'];
        $query1 = mysqli_query($link, "SELECT * FROM $linkChat");

        $firstRow = mysqli_fetch_array($query1);

        if($firstRow[\'name\'] == $nameAuthor){
            echo \'<div class="row justify-content-end">
                    <div class="alert alert-primary" role="alert">
                       \'.$firstRow[\'text\'].\'<br>\'.$firstRow[\'name\'].$firstRow[\'time\'].\'
                    </div>
                   </div>\';
        }
        else if (($firstRow[\'name\'] != $nameAuthor) && ($firstRow[\'name\'] != "")){
            echo \'<div class="row justify-content-start">
                    <div class="alert alert-primary" role="alert">
                       \'.$firstRow[\'text\'].\'<br>\'.$firstRow[\'name\'].$firstRow[\'time\'].\'
                    </div>
                   </div>\';
        }

        while($row=mysqli_fetch_array($query1))
        {
            if ($row[\'name\'] == $nameAuthor){
                echo \'<div class="row justify-content-end">
                    <div class="alert alert-primary" role="alert">
                       \'.$row[\'text\'].\'<br>\'.$row[\'name\'].$row[\'time\'].\'
                    </div>
                   </div>\';
            }
            else if ($row[\'name\'] != $nameAuthor){
                echo \'<div class="row justify-content-start">
                    <div class="alert alert-primary" role="alert">
                       \'.$row[\'text\'].\'<br>\'.$row[\'name\'].$row[\'time\'].\'
                    </div>
                   </div>\';
            }
        }
    ?>
</div>

<br>
<br><br><br>

<div class="container">
    <div class="row justify-content-center">
        <div id="footer" class="bg-white">
            <form class="form-inline justify-content-center" method="post" action="../operation/addMessageToDB.php">
                <div class="form-group mb-2 mt-2 mr-2">
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Напишите сообщение..." name="message">
                </div>
                <button type="submit" class="btn btn-primary mb-2 mt-2">Отправить
                </button>
            </form>
        </div>
    </div>
</div>
</body>
</html>' . PHP_EOL;

$f_hdl = fopen($filename, 'w');
fwrite($f_hdl, $text);
fclose($f_hdl);

header('Location: ../'.'../chats/'.$creatLink.'.php');
?>