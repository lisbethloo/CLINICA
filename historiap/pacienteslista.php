<?php  
session_start();   
if(!isset($_SESSION['admin']))header("location: ../principal.php");  
 
require '../conexion2.php'; 
 
date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fecha = date('d-m-Y ');


 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Ficha de pacientes</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="icon"  href="../images/logito.png" type="image/x-icon"/>
<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
<script type="text/javascript" src="../js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-replace.js"></script> 
<script type="text/javascript" src="../js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_400.font.js"></script>
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
					<li><center><figure class="left marg_right1"> </figure></center>
					<div class="text1"></span></div>
					</li>
						<li ><a href="../index.php">Inicio</a></li>
						<li id="menu_active"><a href="historiap.php">Ficha de paciente </a></li>
						<li id="menu_active"><a href="pacienteslista.php">Lista de paciente </a></li>
						<li><a href="../cirugia/pabellonmenu.php">Calendario</a></li>
						<li ><a href="../inventario/indexinventario.php">Inventario</a></li>
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
			<article class="pad_left2">
				<h2>Lista de pacientes</h2>
				
			
				<div class="wrapper marg_top">
					
					
		
				</div>
			</article>
		</section>
	</div>
</div>


<div class="main">
	<section id="content">
		
	
			<!--inventario de pacientes-->	
		
		
 <?php
 
  
  
include_once("config.php");



$consulta_noticias = "SELECT * FROM pacientep";
$rs_noticias = mysqli_query($con,$consulta_noticias );
$num_total_registros = mysqli_num_rows($rs_noticias);
//Si hay registros
if ($num_total_registros > 0) {
	//Limito la busqueda
	$TAMANO_PAGINA = 10;
        $pagina = false;

	//examino la pagina a mostrar y el inicio del registro a mostrar
        if (isset($_GET["pagina"]))
            $pagina = $_GET["pagina"];
        
	if (!$pagina) {
		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina - 1) * $TAMANO_PAGINA;
	}
	//calculo el total de paginas
	$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

	

	
	$consulta = "SELECT cod_alu, p_nom, p_ape FROM pacientep ORDER BY fecha DESC LIMIT ".$inicio."," . $TAMANO_PAGINA;
	$rs = mysqli_query($con,$consulta );
	


?>

	<form  name="fe" action="historiap.php" method="post" id="ContactForm">
	

  
	<a></a><a></a><a></a><a></a><a><a></a><a></a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a><a></a>
	
	
	<div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-search"></i></span>
    </div>
 	<input name="txtbus" type=text  class="form-control"  placeholder='Buscar pacientes' aria-label="Username" aria-describedby="addon-wrapping">
	</div>
    <br></br>
 
	<a> </a>
	 
    <input title="AQUI BUSCAS EL PACIENTE POR CODIGO,NOMBRE,APELLIDO,ETC" class="btn btn-dark" name="btn1" type="submit" value="Buscar">
    
  </form>
  <center>
  
  </br>
<?php echo '<p>Mostrando la pagina '.$pagina.' de ' .$total_paginas.' paginas.</h3>'; ?>
<table style="border:1px  #666666; color:# 666666 ; width:800px; text-align:center;" >
  <tbody>
    <tr style="background:#6666666;">
      <td bgcolor="#CCCCCC" >Codigo</td>
      <td bgcolor="#CCCCCC">Nombre</td>
      <td bgcolor="#CCCCCC">Apellido</td>
	  <td bgcolor="#CCCCCC">Operaciones</td>
    </tr>
 
<?php     
 while ($row = mysqli_fetch_array($rs)) {
 
echo "<tr>".
      "<td>".$row["cod_alu"]."</td>".
      "<td>".$row["p_nom"]."</td>".
	   "<td>".$row["p_ape"]."</td>".
    
      // Establecemos un hipervínculo para cada fila de datos si lo hubiera
      // que apunte al archivo modificar.php, pasando el número de cédula en su
      // dirección a través de la variable Cedula
      "<td><a  href=nuevaconsul.php?codigo=".$row["cod_alu"]."><img src='../images/nueva_cita.png' width='25' alt='Edicion' title='AGREGAR CONSULTA NUEVA DE  ".$row["p_nom"]."'></a>
	  <a  href=modificar.php?codigo=".$row["cod_alu"]."><img src='../images/ver.png' width='25' alt='Edicion' title='CONSULTAR LOS DATOS DE ".$row["p_nom"]."'></a> <a  href=actualizar.php?codigo=".$row["cod_alu"]."><img src='../images/editar.png' width='25' alt='Edicion' title='EDITAR A  ".$row["p_nom"]."'></a>
	  <a  href=eliminar.php?codigo=".$row["cod_alu"]."><img src='../images/eliminar.png' width='25' alt='Edicion' title='ELIMINAR A  ".$row["p_nom"]."'></a>
	 </td>".
    "</tr>";
 
}
?>
 </tbody>
	</table>
<?php
	}
	echo '<p>';

	if ($total_paginas > 1) {
		if ($pagina != 1)
			echo '<a href="'.$url.'?pagina='.($pagina-1).'"><img src="images/izq.gif" border="0"></a>';
		for ($i=1;$i<=$total_paginas;$i++) {
			if ($pagina == $i)
				//si muestro el ï¿½ndice de la pï¿½gina actual, no coloco enlace
				echo $pagina;
			else
				//si el ï¿½ndice no corresponde con la pï¿½gina mostrada actualmente,
				//coloco el enlace para ir a esa pï¿½gina
				echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
		}
		if ($pagina != $total_paginas)
			echo '<a href="'.$url.'?pagina='.($pagina+1).'"><img src="images/der.gif" border="0"></a>';
	}
	echo '</p>';

	//pongo el nï¿½mero de registros total, el tamaï¿½o de pï¿½gina y la pï¿½gina que se muestra
	echo '<a style="color: #660099"> Numero de pacientes registrados: '.$num_total_registros .'</a>';
echo "</center>";	
	
?>			
				
	</center>	
	
</center>			
		</div>	
<!--content end-->
<!--footer -->
<div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
				<ul>
					<li class="bg_none"><a href="pacientepdf.php" target="_blank">Imprimir lista de pacientes</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<div class="body5">
	<div class="main">
		<footer>
				<?php echo "Bienvenida Dr. <b>".$_SESSION['admin']." </b>"; ?>
		</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
