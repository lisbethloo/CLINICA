<?php
include "conexion2.php";
		$mysqli = new mysqli($bd_host , $bd_usuario,$bd_password, $bd_base ); 
		$sql_mov ="SELECT DISTINCT `descriccion` FROM `productos` ORDER BY `descriccion` ASC ";
		$result_mov= mysqli_query($mysqli,$sql_mov);
		$options_mov = '';
		//mysqli_result($result_mov);
		while ($row_mov = mysqli_fetch_array($result_mov))
			{	$options_mov = $options_mov.'<option value="'.$row_mov['descriccion'].'">'.$row_mov['descriccion'].'</option>'; }
	?> 
    
    
 
<?php

	
include "conexion2.php";
		$mysqli = new mysqli($bd_host , $bd_usuario,$bd_password, $bd_base ); 
$sql_prd = "SELECT DISTINCT `descriccion` FROM `productos` ORDER BY `descriccion` ASC "; 
	      $result_prd = mysqli_query($mysqli,$sql_prd); 
	      $options_prd = ''; 
	    while ($row_prd = mysqli_fetch_array($result_prd))
		{	$options_prd = $options_prd.'<option value="'.$row_prd['descriccion'].'">'.$row_prd['descriccion'].'</option>'; }



$sql_marca = "SELECT DISTINCT `marca` FROM `productos` ORDER BY `marca` ASC "; 
	      $result_marca = mysqli_query($mysqli,$sql_marca); 
	      $options_marca = ''; 
	    while ($row_marca = mysqli_fetch_array($result_marca))
		{	$options_marca = $options_marca.'<option value="'.$row_marca['marca'].'">'.$row_marca['marca'].'</option>'; }
		

?>
<?php
include "conexion2.php";
		$mysqli = new mysqli($bd_host , $bd_usuario,$bd_password, $bd_base ); 
		$sql_mov = "SELECT DISTINCT `nombre` FROM `provedor` ORDER BY `nombre` ASC ";
		$result_mov = mysqli_query($mysqli,$sql_mov);
		$options_prov = '';
		while ($row_mov = mysqli_fetch_array($result_mov))
			{	$options_prov = $options_prov.'<option value="'.$row_mov['nombre'].'">'.$row_mov['nombre'].'</option>'; }
	?> 

<?php
include "conexion2.php";
		$mysqli = new mysqli($bd_host , $bd_usuario,$bd_password, $bd_base ); 
		$sql_mov = "SELECT DISTINCT `precio_l` FROM `productos` ORDER BY `precio_l` ASC ";
		$result_mov = mysqli_query($mysqli,$sql_mov);
		$preciol = '';
		while ($row_mov = mysqli_fetch_array($result_mov))
			{	$preciol = $preciol.'<option value="'.$row_mov['precio_l'].'">'.$row_mov['precio_l'].'</option>'; }
	?> 

<?php
include "conexion2.php";
		$mysqli = new mysqli($bd_host , $bd_usuario,$bd_password, $bd_base ); 
		$sql_mov = "SELECT DISTINCT `nombre` FROM `administrador` ORDER BY `nombre` ASC ";
		$result_mov = mysqli_query($mysqli,$sql_mov);
		$options_admin = '';
		while ($row_mov = mysqli_fetch_array($result_mov))
			{	$options_admin = $options_admin.'<option value="'.$row_mov['nombre'].'">'.$row_mov['nombre'].'</option>'; }
	?> 
    




