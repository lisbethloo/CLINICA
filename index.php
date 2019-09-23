<?php  
session_start();   
if(!isset($_SESSION['admin']))header("location: principal.php");  
 
date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fecha = date('d-m-Y ');



header('refresh:180; url=cerrar.php');


require 'conectar.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Index</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="icon"  href="images/logito.png" type="image/x-icon"/>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/c675b21c5b.js" crossorigin="anonymous"></script>
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
					<div class="text1"></span></div>
					</li>
						<li id="menu_active"><a href="index.php">Inicio</a></li>
						<li ><a title="FICHA DE LOS PACIENTES " href="historiap/historiap.php">Ficha de paciente</a></li>
						<li ><a title="LISTA DE LOS PACIENTES" href="historiap/pacienteslista.php">Lista de paciente</a></li>
						<li><a  title="MENU DE CIRUGIAS" href="cirugia/pabellonmenu.php">Calendario</a></li>
						<li><a title="INVENTARIO DE LA FARMACIA" href="inventario/indexinventario.php">Inventario</a></li>
						<li><a title="OPCIONES DEL SISTEMA " href="sistema/sistemamenu.php">Sistema</a></li>

						<li class="bg_none"><a title="CERRAR SESSION DEl <?php echo "Dr. ".$_SESSION['admin'].""; ?>" href="cerrar.php">Salir</a></li>
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
				<h2>Sistema Odontologico </h2>
				
			</article>
		</section>
	</div>
</div>
<div class="main">
	<section id="content">
		<div class="wrapper pad_bot1">
			<article class="col1 pad_left2">
	<form  name="fe" action="historiap/historiap.php" method="post" id="ContactForm">
	
<br>
<br>
   <b>Busqueda Por Descripcion</b><br><br><div class="input-group flex-nowrap">
  <div class="container">
	  <div class="row">
	      <div class="col-md-4">
	 
				<div class="input-group-prepend">
					<!--span class="input-group-text" id="addon-wrapping"><i class="fas fa-search"></i></span-->
					</div>
					<input name="txtbus" type=text  class="form-control"  placeholder='nombre,apellido, etc... .....' aria-label="Username" aria-describedby="addon-wrapping">
					</div>
			<div>
		</div>
  </div>
	<br><br>
    <input  name="btn1" type="submit" class="btn btn-dark" value="Buscar">
	<a> </a><input  name="btn1" type="submit" class="btn btn-dark" value="Agregar Paciente Nuevo">
    
    
  </form>
  
  
			</article>
			<article class="col2 pad_left1">
				<h2>Ultimos Pacientes Agregados</h2>
				<?php
				 
$query_movimiento =("SELECT * FROM pacientep WHERE p_nom = p_nom AND datediff(now(),fecha)=0 ORDER BY cod_alu asc");

// ("SELECT * FROM pacientep WHERE p_nom = p_nom AND fecha > DATE_SUB(CURDATE(), INTERVAL 7 DAY) ORDER BY fecha DESC");

$movimiento = mysqli_query($mysqli,$query_movimiento);


$Rs = mysqli_fetch_assoc($movimiento);

?>
				
				<div class="wrapper marg_top pad_bot1">
					
	<table style= "border:1px ; color: #000000; width:350px; text-align:center;">
<tr style="background: #f1e322">
   
	<td>Nº</td>
    <td>NOMBRE</td>
	<td>APELLIDO</td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	
	

	
</tr>


<?php
 do { 

?>
  <?php echo  "<tr bgcolor='#FFFFFF'>".
  
      "<td>".$Rs["cod_alu"]."</td>".
      "<td>".$Rs["p_nom"]."</td>".
	  "<td>".$Rs["p_ape"]."</td>".
    
      
      "<td><a title='CONSULTAR LOS DATOS DE ".$Rs["p_nom"]."'  href=historiap/modificar.php?codigo=".$Rs["cod_alu"].">Ver</a></td>".
    "</tr>";

	 ?>
       
    </tr><?php
	   
	      } while ($Rs= mysqli_fetch_assoc($movimiento)); ?>
	



<?php mysqli_free_result($movimiento); ?>
</table>
				
			
		</div>
		
	</section>
</div>

<div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
				<ul>
					<li><?php echo "Bienvenido Dr. <b>".$_SESSION['admin']." </b>"; ?> </li>
					
					<li class="bg_none"><?php echo "<b>$fecha </b>"; ?></li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<div class="body5">
	<div class="main">
		<footer>
			@LogotipsMarketingBusiness </br>

		</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>