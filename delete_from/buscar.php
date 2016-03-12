<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pesquisa de Produtos</title>
</head>

<body>
<?php
include "conexao.php";
$codigo = $_POST['codigo'];

$sql = mysql_query("SELECT * FROM tb_clientes WHERE codigo LIKE '%".$codigo."%'");

$row = mysql_num_rows($sql);

if($row > 0) {
	while($linha = mysql_fetch_array($sql)) {
		$codigo = $linha['codigo'];
		$nome = $linha['nome'];
		$email = $linha['email'];
		$senha = $linha['senha'];
		echo ("<strong> Código de Cadastro: </strong>".$codigo."<br />");
		echo ("<strong> Nome: </strong>".$nome."<br />");
		echo ("<strong> Email: </strong>".$email."<br />");
		echo ("<strong> Senha: </strong>".$senha."<br /> <hr>");
		echo "<a href='deletar.php?codigo=$codigo'>[Excluir Cliente]</a>";
	}
}else {
	echo "Sua pesquisa não obteve nenhum resultado";
}


?>
<p>
<a href="index.html" style='font-size:24px'>Voltar</a>
</p>

</body>
</html>