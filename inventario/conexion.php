<?php
function conectarse()
	{
		$bd_host = "localhost";
	$bd_usuario = "root";	
	$bd_password = "";
	$bd_base = "clinica";
	$mysqli = new mysqli("localhost", "root","","clinica");
	return $mysqli;
	}
?>
