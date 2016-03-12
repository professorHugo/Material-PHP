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
<?php
//Criar uma variável que irá guardar a informação do Email antigo do usuário
$emailAntigo = $_SESSION['email'];
//Criar uma variável que irá armazenar um novo endereço de Email. Este usará o metodo $_GET
$emailNovo = $_GET['emailnovo'];
//Comando para fazer a alteração na base de dados
$sql = mysql_query("UPDATE tbusuarios SET email = '$emailNovo' WHERE email = '$emailAntigo'");

echo 'Email Alterado com sucesso!';

?>
<br />
<a href="index.html">Acessar novamente</a>
</body>
</html>