<?php
	include 'conexao.php';
	$result = mysqli_query($con,"SELECT * FROM usuarios WHERE usuario='hugo'");
	while($row = mysqli_fetch_array($result))
	{
		echo $row['FirstName'] . " " . $row['LastName'];
		echo "<br>";
	}
?>