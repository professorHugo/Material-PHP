<!DOCTYPE html>
<html>
<head>
	<title>Consultar</title>
	<style>
		body{
			margin:0;
		}
		#principal{
			width:1000px;
			height:900px;
			background-color:#0099ff;
			margin:0 auto;
		}
		#topo{
			width:90%;
			height:200px;
			margin-left:5%;
			background-color:#00ff99;
		}
		#cadastro{
			width:500px;
			height:200px;
			margin-top:10px;
			margin-left:50px;
			background-color:#cccccc;
		}
		#pesquisa{
			width:500px;
			height:100px;
			margin-top:10px;
			margin-left:50px;
			background-color:#cccccc;
		}
	</style>
</head>
<body>
	<div id="principal">
		<div id="topo">
		</div>
		<div id="cadastro">
			<?php
				include 'conexao.php';
				
				
				$usuario = $_POST['usuario'];
				$senha = $_POST['senha'];
				$email = $_POST['email'];
				
				mysql_query("insert into usuarios(usuario,senha,email) values('$usuario','$senha','$email')");
				
				echo("<h1>Cadastro efetuado com sucesso!</h1>");
			?>
		</div>
		<div id="pesquisa">
			<form action="pesquisar.php">
           		<br/>
		    	Digite o nome: <input type="text" id="codigo">
				<p>
				<input type="submit" value="Pesquisar">
				</p>
			</form>
		</div>
	</div>
</body>
</html>