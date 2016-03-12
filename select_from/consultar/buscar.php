<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pesquisa de Produtos</title>
</head>

<body>
<?php
include "conexao.php";
$buscar = $_POST['codigo'];

$sql = mysql_query("SELECT * FROM tb_produtos WHERE codigo LIKE '%".$buscar."%'");

$row = mysql_num_rows($sql);

if($row > 0) {
	while($linha = mysql_fetch_array($sql)) {
		$codigo = $linha['codigo'];
		$produto = $linha['produto'];
		$quantidade = $linha['quantidade'];
		$valor = $linha['valor'];
		echo ("<strong> Produto: </strong>".$produto."<br />");
		echo ("<strong> Produto: </strong>".$produto."<br />");
		echo ("<strong> Quantidade: </strong>".$quantidade."<br />");
		echo ("<strong> Valor: </strong>".$valor."<br /> <hr>");
	}
}else {
	echo "Sua pesquisa não obteve nenhum resultado";
}
?>
<a href="index.html">Voltar</a>
</body>
</html>