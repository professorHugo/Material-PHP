<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<?php
//incluir a conexão com a base de dados na página
include 'conexao.php';
//Validar as informações do usuário na página
session_start();
if(!isset($_SESSION['email'])||!isset($_SESSION['senha'])){
	header('location:login.php');
	$emailAntigo = $_SESSION['email'];
	exit;
}else{}
?>

</head>

<body>
<form id="form" name="form" method="GET" action="alterado.php">
Email:<input type="email" id="emailnovo" name="emailnovo" />
<input type="submit" value="Alterar Email"/>
</form>

</body>
</html>