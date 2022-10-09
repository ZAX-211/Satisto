<?php
session_start();
require_once('connection.php');
$login = $_POST['login'];
$password = $_POST['password'];


$sql = $con->prepare("select 'f_i_o' from personal where login_p=? and pass_p=?");
$sql->bind_param('ss', $login, $password);
$sql->execute();
$sql = $sql->get_result();
$numrows = $sql->fetch_assoc();

$zapros = "SELECT * FROM `personal` WHERE `login_p`='$login' and `pass_p`='$password'";
$sql1 = mysqli_query($con, $zapros);
$result = mysqli_fetch_array($sql1);

$_SESSION['fio'] = $result[0];

if ($numrows > 0) {
	//$sql -> close();
	header("Location: kabinet_personal.php");
	exit;
}

$sql = $con->prepare("select 'f_i_o' from students where login_s =? and pass_s=?");
$sql->bind_param('ss', $login, $password);
$sql->execute();
$sql = $sql->get_result();
$numrows = $sql->fetch_assoc();

$zapros = "SELECT * FROM `students` WHERE `login_s`='$login' and `pass_s`='$password'";
$sql1 = mysqli_query($con, $zapros);
$result = mysqli_fetch_array($sql1);

$_SESSION['fio'] = $result[0];

if ($numrows > 0) {
	//$sql -> close();
	$_SESSION['fio'] = $result[0];
	echo "OK";
	header("Location: kabinet_student.php");
} else {
	echo "FaIL";
	//$sql -> close();
	header("Location: index.php");
}
