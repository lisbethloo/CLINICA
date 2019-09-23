<?php   
session_start();   
if(!isset($_SESSION['admin']))header("location: principal.php");  
 
require './conexion2.php'; 
 
date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fecha = date('d-m-Y ');


 require 'select.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>borrar articulo</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
<script type="text/javascript" src="../js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-replace.js"></script> 
<script type="text/javascript" src="../js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_400.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page2">
<div class="body1"></div>
<div class="body2">
	<div class="main">
	<div class="ic"> </div>
<!--header -->
		<header>
			<div class="wrapper">
				<nav>
					<ul id="menu">
					<li><center><figure class="left marg_right1"></figure>
					</center>
					<div class="text1"> </span></div>
					</li>
						<li ><a href="../index.php">Inicio</a></li>
						<li ><a href="../historiap/historiap.php">Ficha de paciente </a></li>
						<li ><a href="../historiap/pacienteslista.php">Lista de paciente </a></li>
						<li><a href="../cirugia/pabellonmenu.php">Calendario</a></li>
						<li id="menu_active"><a href="indexinventario.php">Inventario</a></li>
						<li><a href="../sistema/sistemamenu.php">Sistema</a></li>
						<li class="bg_none"><a href="../cerrar.php">Salir</a></li>
					</ul>
				</nav>
			</div>
			<div class="wrapper">
				
				</article>
			</div>
		</header>
	</div>
</div>
<!--header end-->
<!--content -->
<div class="body3">
	<div class="main">
		<section id="content_top">
			<article class="pad">
				<h2>INVENTARIO</h2>
			</article>
		</section>
	</div>
</div>
<div class="main">
	<section id="content">
		<div class="wrapper pad_bot1">
			
			
				
				
				</br>
				
				<?php


/* Abrir conexion a la Base de Datos */ 
$conexion=mysqli_connect('localhost','root','','clinica'); 
$conexion2=("SELECT * from productos order by codigo asc");
$consulta=mysqli_query($conexion,$conexion2); 

	$query_movimiento = ("SELECT * FROM productos ");


$query_m = ("SELECT * FROM  productos,mov_pro WHERE descriccion = descriccion_pro AND datediff(now(),fecha_pro)=0 ORDER BY fecha_pro DESC");
$total = mysqli_query($conexion,$query_m) ;//(mysql_error());
$row_total = mysqli_fetch_assoc($total);

$movimiento = mysqli_query($conexion,$query_movimiento);//(mysql_error());
$row_movimiento = mysqli_fetch_assoc($movimiento);
?>


         
<center>
<table style="border:1px  #666666; color:# 666666 ; width:800px; text-align:center;">
<tr style="background:#6666666;">
<?php
	
	echo "<td>Codigo</td><td>Descripcion</td><td>modelo</td><td>Cantidad</td><td>Precio Base</td><td>Precio Publico</td></tr>  ";
	

/* Mostrar la Consulta */ 
while ($valores = mysqli_fetch_array($consulta)) { 
echo "<tr bgcolor=' #666666'><br><td>". $valores['codigo'] . "</td><td>". $valores['descriccion'] . "</td><td>". $valores['modelo'] . "</td><td>". $valores['cantidad'] . "</td><td>". $valores['p_base'] . "</td><td>". $valores['p_publico'] . "</td></tr>"; 
} // while 
/* Cerrar conexion a la BD */ 
mysqli_free_result($consulta); 
mysqli_close($conexion); 
		echo "</center>";
		
	

?>
  <?php 
  require './conexion2.php'; 
  $conexion=mysqli_connect('localhost','root','','clinica'); 

  do { ?>
    <tr bgcolor='# 999999 '>
     
	  
	  <td><?php  $row_movimiento['p_publico']; ?></td>
      <td><?php  $row_movimiento['cantidad']; ?></td>
    </tr>

    <?php 
	

	
	
	 
	$total += $row_movimiento['cantidad'];
	$total2 += $row_movimiento['p_publico'];
	
	      //mostramos los resultados de la busqueda
	      } while ($row_movimiento= mysqli_fetch_assoc($movimiento)); ?>
	


</table> 
				
     
	

				
				
								
			
				</strong>
			</article>
		</div>
		
	</section>
</div>

<div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
				<ul>
						<li><a href="articulosmenu.php">Articulos</a></li>
					<li><a href="transaccionesmenu.php">Transacciones</a></li>
					<li class="bg_none"><a href="kardexmenu.php">Informes</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<div class="body5">
	<div class="main">
		<footer>
				</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>

