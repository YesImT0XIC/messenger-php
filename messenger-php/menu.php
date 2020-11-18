?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>АРМ сотрудника отдела кадров</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/handlewithcare_5112.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <!--===============================================================================================-->
</head>

<body>

<!--===============================================================================================-->

<header>
    <div class="header-left">
        <a href="menu.php"><img src="images/35-350406_connect-marketing.png" height="92" width="92"></a>
    </div>

    <div class="header-center">
        <ul class="hr">
<?php
    echo '  <li><a href="menu.php">Новости</a></li>
            <li><a href="freeVacansy.php">Свободные вакансии</a></li>';
    if ($_SESSION['user']['level'] > 0) {
    echo '<li ><a href = "company.php" > Состав комапнии </a ></li >' ;
    }
    if ($_SESSION['user']['level'] > 1) {
    echo '<li ><a href = "documents.php" >Документы компании</a ></li >' ;
    }
?>
        </ul >
    </div >
    <div class="header-right">
        <?php
        echo '<p class="name"><a href="profile.php">' . $_SESSION['user']['name'] . '</a></p>';
        if(isset($_SESSION['user']) == false){
        echo '<a href="index.php">Войти</a>';
        }
        ?>
    </div>

</header>
</form>

<!--===============================================================================================-->

<div class="post-wrap">
    <a href="#">
        <div class="post-item">
            <div class="coin">
                <div class="item-icon group">
                    <img src="images/авпвапвп.JPG" width="260" height="140">
                </div>
                <div class="item-body">
                    <h3>График работы офиса 26 октября</h3>
                    <p>Сегодня, 26-го октября, офис нашей компании работает по сокращенному графику до 16.00.</p>
                </div>
                <div class="item-footer">
                    <a href="#" class="link"><span>Перейти</span></a>
                </div>
            </div>
        </div>
    </a>

    <a href="#">
        <div class="post-item">
            <div class="crash">
                <div class="item-icon tree">
                    <img src="images/новость2.JPG" height="140" width="260">
                </div>
                <div class="item-body">
                    <h3>Технические работы 14-15 октября</h3>
                    <p>Важная информация для всех сотрудников компании, могут быть перебои в работе сети интренет </p>
                </div>
                <div class="item-footer">
                    <a href="#" class="link"><span>Перейти</span></a>
                </div>
            </div>
        </div>
    </a>

    <a>
        <div class="post-item">
            <div class="nvuti">
                <div class="item-icon anchor">
                    <img src="images/новость3.JPG" width="260" height="140">
                </div>
                <div class="item-body">
                    <h3>Нестабильная работа Wi-Fi сети</h3>
                    <p>04.09.2020. В настоящее время наблюдается нестабильная работа Wi-Fi-оборудования.</p>
                </div>
                <div class="item-footer">
                    <a href="#" class="link"><span>Перейти</span></a>
                </div>
            </div>
        </div>
    </a>

    <div class="post-item">
        <div class="rulet">
            <div class="item-icon video">
                <img src="images/новость4.JPG" height="140" width="260">
            </div>
            <div class="item-body">
                <h3>Новая редакция договора iStudent</h3>
                <p>Изменения в публичном договоре iStudent. Просим всех ознакомиться.</p>
            </div>
            <div class="item-footer">
                <a href="#" class="link"><span>Перейти</span></a>
            </div>
        </div>
    </div>

    <div class="post-item">
        <div class="cnb">
            <div class="item-icon photo">
                <img src="images/новость5.JPG" height="140" width="260">
            </div>
            <div class="item-body">
                <h3>График работы офиса до 23 августа</h3>
                <p>Офис "Деловой сети" временнно меняет график работы.</p>
            </div>
            <div class="item-footer">
                <a href="#" class="link"><span>Перейти</span></a>
            </div>
        </div>
    </div>

    <div class="post-item">
        <div class="prize">
            <div class="item-icon gift">
                <img src="images/новость6.JPG" width="260" height="140">
            </div>
            <div class="item-body">
                <h3>Редакция договора об оказании услуг электросвязи</h3>
                <p>Компания внедряет электронный документ.</p>
            </div>
                <div class="item-footer">
                <a href="#" class="link"><span>Перейти</span></a>
                </div>
        </div>
    </div>
</div>
</body>
</html>