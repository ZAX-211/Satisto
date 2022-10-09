<html>

<body>

    <head>
        Личный кабинет студента
    </head>

    <span><?php
            session_start();
            $a = $_SESSION['fio'];
            print "Добро пожаловать  $a<br>";
            //echo $_SESSION['b'];
            ?></span>

    <h1>Оценки</h1>
    <span><?php
            require_once('connection.php');
            $sql = mysqli_query($con, "SELECT `ocenka`,`discipline_name_discpl` FROM `ocenki` where `students_f_i_o`='$a'");
            echo "<table width='100%' border='1'>";
            echo "<tr><td>Оценка</td><td>Дисциплина</td></tr>";
            while ($row = mysqli_fetch_array($sql)) {
                $pole1 = $row[0];
                $pole2 = $row[1];

                echo "<tr><td>$pole1</td><td>$pole2</td></tr>";
            }
            echo "</table>";
            ?></span>
    <h1>Посещаемость</h1>
    <span><?php
            require_once('connection.php');
            $sql = mysqli_query($con, "SELECT `date` FROM `posehenie` where `students_f_i_o`='$a'");
            echo "<table width='100%' border='1'>";
            echo "<tr><td>Дата посещения</td></tr>";
            while ($row = mysqli_fetch_array($sql)) {
                $pole1 = $row[0];

                echo "<tr><td>$pole1</td></tr>";
            }
            echo "</table>";
            ?></span>
    <h1>Учебный план</h1>
    <span><?php
            require_once('connection.php');
            $sql = mysqli_query($con, "SELECT `planes`.`Discipline_name_discpl`,
            `discipline`.`hours`,
            `discipline`.`personal_f_i_o`  FROM `planes` inner join `discipline` on `planes`.`Discipline_name_discpl`=`discipline`.`name_discpl` where `planes`.`students_f_i_o`='$a'");
            echo "<table width='100%' border='1'>";
            echo "<tr><td>Название</td><td>Часы</td><td>Преподаватель</td></tr>";
            while ($row = mysqli_fetch_array($sql)) {
                $pole1 = $row[0];
                $pole2 = $row[1];
                $pole3 = $row[2];

                echo "<tr><td>$pole1</td><td>$pole2</td><td>$pole3</td></tr>";
            }
            echo "</table>";
            ?></span>
</body>

</html>