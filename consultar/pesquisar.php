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
				$resultado = mysql_query("SELECT * FROM 'usuarios' WHERE (usuario ='hugo')");
				
				while($row = mysql_fetch_array($resultado,$con))
				  {
				  echo $row['usuario'] . " " . $row['usuario'];
				  echo "<br>";
				  }
			?>
		</div>
		<div id="pesquisa">
			<form action="pesquisar.php" method="post">
           		<br/>
		    	Digite o nome: <input type="text" id="nome">
				<p>
				<input type="submit" value="Pesquisar">
				</p>
			</form>
	  </div>
	</div>
</body>
</html>