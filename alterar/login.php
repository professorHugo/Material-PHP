<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php
include ("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$acesso = mysql_query("SELECT * FROM tbUsuarios WHERE email = '$email' and senha = '$senha'") or die(mysql_error());
$linhas_acesso = mysql_num_rows($acesso);
{
	if($linhas_acesso > 0){
		session_start();
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['senha'] = $_POST['senha'];
		
		echo"<script>alert ('Usuário conectado')</script>";
		echo"<meta http-equiv='refresh' content='1.5;url=index2.php'>";
	}
	else{
		echo"<script>alert ('Usuário e/ou senha incorretos!')</script>";
		echo"<meta http-equiv='refresh' content='1.5; url=index.html'";
	}
}
		
?>
</body>
</html>