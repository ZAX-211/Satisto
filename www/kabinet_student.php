



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/marks.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Личный кабинет студента</title>
</head>
<body>
    <div class="header">
        <img src="img/logo.png" alt="logo" width="300px">
        
        <div class="titles">
            <h1>Электронный журнал</h1>
            <p>Рубцовский институт (филиал) АлтГУ</p>
        </div>
                <div class="titles_user">
            <a href="#"><img src="img/Chelovechek.png" alt="Просто иконка, обозначающая юзера" width="50px" height="70px"></a>
                        <span><?php
            session_start();
            $a = $_SESSION['fio'];
            //print "Добро пожаловать  $a<br>";
            //echo $_SESSION['b'];
            echo "$a"
            ?></span>
        </div>
        </div>

    </div>

    <nav class="headerNav">
        <div class="container">
            <div class="header_section">
                <ul class="header_menu">
                    <li class="main_page">Главная</li>
                    <li><a href="#">> Личный кабинет</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="obr_sviaz">
        <img src="img/priamoygolnik.png" alt="Личный кабинет преподавателя" width="20px" height="60px">
        <h2>Личный кабинет</h2>
    </div>

    <nav class="headerNavTabs">
        <div class="containerTabs">
            <div class="header_tabs">
                <ul class="header_menuTabs">
                    <li>Оценки</li>
                </ul>
            </div>
        </div>
    </nav>

    <span><?php
            require_once('connection.php');
            $sql = mysqli_query($con, "SELECT `ocenka`,`discipline_name_discpl` FROM `ocenki` where `students_f_i_o`='$a'");
            echo "<table border='1'>";
            echo "<tr><td>Оценка</td><td>Дисциплина</td></tr>";
            while ($row = mysqli_fetch_array($sql)) {
                $pole1 = $row[0];
                $pole2 = $row[1];

                echo "<tr><td>$pole1</td><td>$pole2</td></tr>";
            }
            echo "</table>";
            ?></span>

    <nav class="headerNavTabs">
        <div class="containerTabs">
            <div class="header_tabs">
                <ul class="header_menuTabs">
                    <li>Посещаемость</li>
                </ul>
            </div>
        </div>
    </nav>

    <span><?php
            require_once('connection.php');
            $sql = mysqli_query($con, "SELECT `date` FROM `posehenie` where `students_f_i_o`='$a'");
            echo "<table border='1'>";
            echo "<tr><td>Дата посещения</td></tr>";
            while ($row = mysqli_fetch_array($sql)) {
                $pole1 = $row[0];

                echo "<tr><td>$pole1</td></tr>";
            }
            echo "</table>";
            ?></span>

    <nav class="headerNavTabs">
        <div class="containerTabs">
            <div class="header_tabs">
                <ul class="header_menuTabs">
                    <li>Учебный план</li>
                </ul>
            </div>
        </div>
    </nav>

<span><?php
            require_once('connection.php');
            $sql = mysqli_query($con, "SELECT `planes`.`Discipline_name_discpl`,
            `discipline`.`hours`,
            `discipline`.`personal_f_i_o`  FROM `planes` inner join `discipline` on `planes`.`Discipline_name_discpl`=`discipline`.`name_discpl` where `planes`.`students_f_i_o`='$a'");
            echo "<table border='1'>";
            echo "<tr><td>Название</td><td>Часы</td><td>Преподаватель</td></tr>";
            while ($row = mysqli_fetch_array($sql)) {
                $pole1 = $row[0];
                $pole2 = $row[1];
                $pole3 = $row[2];

                echo "<tr><td>$pole1</td><td>$pole2</td><td>$pole3</td></tr>";
            }
            echo "</table>";
            ?></span>
<a href='inverse_c.html'><button>Обратная связь</button></a>