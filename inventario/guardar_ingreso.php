<?php  
session_start();   
if(!isset($_SESSION['admin']))header("location: principal.php");  
 
require '../conexion.php'; 
 
date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fecha = date('d-m-Y ');


 require 'select.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Index</title>
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
						<li ><a href="../historiap.php">Ficha de paciente </a></li>
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

<?php 
 


  include_once('conexion.php');
  $link=conectarse() ;
  if($link)
	{
		 $x1=$_POST['codigo'];
		 $x2=$_POST['descriccion'];
		 $x3=$_POST['modelo'];
		 $x4=$_POST['p_base'];
		 $x5=$_POST['p_publico'];
		 $x6=$_POST['proveedor'];
		
		 
		 
		 // or $x2=="" or $x3==""  or $x4=="" or $x5=="" or $x6=="" 
		 if($x1=="" or $x2=="" or $x3=="" or $x5=="" or $x6==""  )
				{
					echo "<hgroup>
   <h1>Campos Vacios</h1>
   </hgroup>";
					echo "<br>";
					
				}
		else
		   {
			$sqlconsulta="select * from clinica.productos where trim(codigo) like ".$x1;
			$sqlresultado=mysqli_fetch_row(mysql_query($sqlconsulta));
			if($sqlresultado>0)
			  { 
				echo "<hgroup>
   <h1>El Codigo Ya Existe</h1>
   </hgroup>";
					echo "<br>";	echo "<br>";
					
					
				 
			  }
			else
			 {
				$ssq = "INSERT INTO clinica.productos (codigo, descriccion, modelo, p_base, p_publico,provedor) 
				VALUES ('" . $x1. "','" . $x2. "','" . $x3. "','" . $x4."','" . $x5."','" . $x6."')";	
			    if(mysqli_query($ssq))
		           {
			        echo "<hgroup>

   <h2>Los Productos Fueron gravados Con Exito.</h2>
   </hgroup>";
					 echo "<br>";
					 echo "<br>";
					 echo "<hr>";
					
		           }
		        else
		           {
		             echo "error en el insert" .mysql_error();
		             
		           }
		     }
		   }
	 }
	  echo"<div class='button black'><a href='ingresar_pro.php'>nuevo registro</a></div>";

	  	  
?>
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
				Av. Lucio Oquendo Nro. 3-51 La Concordia Diagonal  a La Funeraria CEICOTACH. San cristobal- Edo. Tachira<br>
			Telf:(0414)722.78.12 (044)706.11.74 (0416)67.655.47
		</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
