<html>

<body>

    <h1>Посещение</h1>
    <span><?php
            require_once('connection.php');
            $sql = mysqli_query($con, "SELECT * FROM `posehenie`");
            echo "<table width='100%' border='1'>";
            echo "<tr><td>Дата</td><td>Название группы</td><td>ФИО</td></tr>";
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