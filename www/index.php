<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница авторизации</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <form method="post" action="check_all.php">
    	<input type="hidden" name="submitted" value="true"/>
        <img src="img/logo.png" alt="Лого" width="600">

        <div class="form_group">
            <label> Логин: </label>
            <input type="text" name="login" placeholder="Введите логин" class="form_input">
        </div>

        <div class="form_group">
            <label> Пароль: </label>
            <input type="text" name="password" placeholder="Введите пароль" class="form_input">
        </div>

        <button class="form_button">Войти</button>
    </form>
</body>
</html>