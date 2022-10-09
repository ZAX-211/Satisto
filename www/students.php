<html>

<body>

    <h1>Студенты</h1>
    <span><?php
            require_once('connection.php');
            $sql = mysqli_query($con, "SELECT * FROM `students`");
            echo "<table width='100%' border='1'>";
            echo "<tr><td>ФИО</td><td>логин</td><td>пароль</td><td>Курс</td><td>Группа</td></tr>";
            while ($row = mysqli_fetch_array($sql)) {
                $pole1 = $row[0];
                $pole2 = $row[1];
                $pole3 = $row[2];
                $pole4 = $row[3];
                $pole5 = $row[4];

                echo "<tr><td>$pole1</td><td>$pole2</td><td>$pole3</td><td>$pole4</td><td>$pole5</td></tr>";
            }
            echo "</table>";
            ?></span>
</body>

</html>