<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php
include "conexao.php";

$codigo = '';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

mysql_query("INSERT INTO tb_clientes(codigo, nome, email, senha) VALUES ('','$nome','$email','$senha')");
header('location:sucesso.html');
?>
</body>
</html>