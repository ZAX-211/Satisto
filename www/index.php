<meta name="viewport" content="width=450"/>
<html>
<head>
<title>WEB-интерфейс</title>
</head>
<body>
<h1>Авторизация</h1>
<form method="post" action="check_all.php">
<input type="hidden" name="submitted" value="true"/>
<fieldset style="width:230px">
	<legend>Поле ввода</legend>
<label> Логин: <input type="text" name="login" placeholder="Введите логин" style="width:220px"><br><br/>
<label> Пароль: <input type="text" name="password" placeholder="Введите пароль" style="width:220px"><br><br/>
</fieldset>
<br />
<input type="submit" value="Войти" style="width:260px"/>
</form>
</body>
</html>