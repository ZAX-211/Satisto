<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/marks_cabinet_prepoda.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Кабинет сотрудника</title>
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
                    <li><a href="teacher.html">> Личный кабинет</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="lich_cabinet">
        <img src="img/priamoygolnik.png" alt="Личный кабинет преподавателя" width="20px" height="60px">
        <h2>Личный кабинет преподавателя</h2>
    </div>

    <a href='groups.php'><button>Группы</button></a>
    <a href='ocenki.php'><button>Оценки</button></a>
    <a href='students.php'><button>Студенты</button></a>
    <a href='poseshen.php'><button>Журнал посещения</button></a>
    <a href='plani_studentov.php'><button>Учебные планы</button></a>
    <a href='inverse_c.html'><button>Обратная связь</button></a>

