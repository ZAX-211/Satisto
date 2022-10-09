<html>

<body>

    <head>
        Список групп
    </head>
    <title>Список групп</title>
    <h1>Группы</h1>
    <div>
        <span><?php
                require_once('connection.php');
                if (!$con) {
                    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
                    exit;
                }

                $sql = mysqli_query($con, 'SELECT `name_group` FROM `groups`');
                while ($result = mysqli_fetch_array($sql)) {
                    echo "{$result['name_group']}<br>";
                }
                ?></span>
    </div>
</body>

</html>