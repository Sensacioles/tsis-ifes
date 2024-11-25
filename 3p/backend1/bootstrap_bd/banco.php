<?php
$sv_nome = "localhost";
$user = "root";
$pass = "usbw";
$db_name = "bootstrap";
$connect = mysqli_connect($sv_nome,$user,$pass,$db_name);
if(mysqli_connect_error()):
	echo "Falha na conexão: ".mysqli_connect_error();
endif;
?>