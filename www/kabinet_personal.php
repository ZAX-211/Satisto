<html>

<head>
    Кабинет сотрудника
</head>
<title>Кабинет сотрудника</title>

<body>
    <span><?php
            session_start();
            $a = $_SESSION['fio'];
            print "Добро пожаловать  $a<br>";
            //echo $_SESSION['b'];
            ?></span>
    <h1>-Менюшка-</h1>
    <a href='groups.php'><button>Группы</button></a>
    <a href='ocenki.php'><button>Оценки</button></a>
    <a href='students.php'><button>Студенты</button></a>
    <a href='poseshen.php'><button>Журнал посещения</button></a>
    <a href='plani_studentov.php'><button>Учебные планы</button></a>
    <div>
        <span><?php
                //session_start();
                //echo $_SESSION['a'];
                //echo $_SESSION['fio'];
                ?></span>
    </div>
    <h1>-Менюшка-</h1>

</body>

</html>