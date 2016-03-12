<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'cadastros';
	$erro = '"Erro na conexão, verifique os dados!"';
	
	$con = mysql_connect($servidor,$usuario,$senha)or mysql_error($erro);
	
	$db = mysql_select_db($banco,$con);
	
	mysql_set_charset('utf-8');
?>