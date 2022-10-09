<html>

<body>

    <h1>Планы студентов</h1>
    <span><?php
            require_once('connection.php');
            $sql = mysqli_query($con, "SELECT * FROM `planes`");
            echo "<table width='100%' border='1'>";
            echo "<tr><td>Номер плата</td><td>Фио студента</td><td>Название группы</td><td>Название предмета</td></tr>";
            while ($row = mysqli_fetch_array($sql)) {
                $pole1 = $row[0];
                $pole2 = $row[1];
                $pole3 = $row[2];
                $pole4 = $row[3];

                echo "<tr><td>$pole1</td><td>$pole2</td><td>$pole3</td><td>$pole4</td></tr>";
            }
            echo "</table>";
            ?></span>
</body>

</html>