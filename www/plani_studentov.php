
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
    <title>Оценки</title>
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

<a href='inverse_c.html'><button>Обратная связь</button></a>

    <nav class="headerNavTabs">
        <div class="containerTabs">
            <div class="header_tabs">
                <ul class="header_menuTabs">
                    <li>Планы студентов</li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
    <span><?php
            require_once('connection.php');
            $sql = mysqli_query($con, "SELECT * FROM `planes`");
            echo "<table>";
            echo "<tr><td>Номер плана</td><td>Фио студента</td><td>Название группы</td><td>Название предмета</td></tr>";
            while ($row = mysqli_fetch_array($sql)) {
                $pole1 = $row[0];
                $pole2 = $row[1];
                $pole3 = $row[2];
                $pole4 = $row[3];

                echo "<tr><td>$pole1</td><td>$pole2</td><td>$pole3</td><td>$pole4</td></tr>";
            }
            echo "</table>";
            ?></span>
    </div>
</body>

</html>