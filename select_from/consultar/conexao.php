﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$base = "bd_cadastro";

mysql_connect($servidor, $usuario, $senha);
mysql_select_db($base);
mysql_set_charset('utf8');
?>
</body>
</html>