<?php   
session_start();   
if(!isset($_SESSION['admin']))header("location: principal.php");  
 
require '../conectar.php'; 
 
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
					<div class="text1"></span></div>
					</li>
						<li ><a href="../index.php">Inicio</a></li>
						<li ><a href="../historiap.php">Ficha de paciente</a></li>
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
				<h2>ELIMINAR PRODUCTO</h2>
			</article>
		</section>
	</div>
</div>
<div class="main">
	<section id="content">
		<div class="wrapper pad_bot1">
			<article class="col1 pad_left2">
			
				
				<p class="pad_bot2 marg_top"><strong>
				</br>
				
				
				<fieldset>
     
	
<section>
</br>


<form action="borrar_art.php" method="post" name="form">
</br>
</br>
   		<?php echo'<select input type="text" name="descriccion"> '.$options_prd.'</select>'; ?>
        
        
        <input type="submit" value="Borrar"/>
        </form>

 </center>  
   
<?php

include("../conectar.php");

$con=mysqli_connect($bd_host,$bd_usuario,$bd_password );
mysqli_select_db($con,$bd_base);

$reg=mysqli_query($con,"SELECT codigo FROM productos WHERE  descriccion='$_POST[descriccion]' ");

echo"</br>";
echo"</br>";

echo"</br>";

echo"<center>";
if(mysqli_fetch_array($reg))
{
	mysqli_query("DELETE FROM productos WHERE descriccion='$_POST[descriccion]'",$con);
echo "<script language='JavaScript'> alert('eliminados '); </script>";
die ("<script>window.location = 'borrar_art.php'</script>");	
	}else{
		echo"";
	}
echo"</center>";	
echo"</br>";
echo"</br>";

?>
</fieldset>
				
				</strong></p>
								
			</article>
			<article class="col2 pad_left1">
				<h2></h2>
				<div class="wrapper marg_top pad_bot1">
					<figure class="left marg_right1"><img alt="" src="../images/farmaceutico.jpg"></figure>
					<br>
				
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
					info . del sistema jond_14@gmail.com</br>
yonathan suarez 	</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>

