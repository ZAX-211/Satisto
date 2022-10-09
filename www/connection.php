<?php
define('HOST','localhost');
define('USER','just_read');
define('PASS','123');
define('DB','e_p');

$con = mysqli_connect(HOST,USER,PASS,DB) or die ('Unable to Connect');

if(!$con)
{
echo 'Connection error == '.mysqli_connect_error();
}
else
{
//echo "OK";
}

?>
