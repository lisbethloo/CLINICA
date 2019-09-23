<?php   
session_start();   
if(!isset($_SESSION['admin']))header("location: ../principal.php");  
 

?>
<?php require '../conectar.php'; ?>

<?php

include ("../conexion.php");


date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fechac = date('y-m-d ');


require '../inventario/select.php'; 

?>

<?php	

$horas_diferencia=0;
$tiempo=time() + ($horas_diferencia * 60 *60);
$fechac = date('y-m-d H:i:s',$tiempo); 
?>
<?php	

$horas_diferencia=0;
$tiempo=time() + ($horas_diferencia * 60 *60);
$fecha = date('y-m-d H:i:s',$tiempo); 
?>
 <?php


  include_once('../conexion2.php');
  $mysqli = new mysqli("localhost", "root","","clinica");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Ficha de paciente</title>
<script src="../jquery/validarvacios.js"></script>
   <script src="../jquery/validar2.js"></script>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/form.css">
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-replace.js"></script> 
<script type="text/javascript" src="../js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_400.font.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/c675b21c5b.js" crossorigin="anonymous"></script>


<link rel="stylesheet" href="../jquery/temas/base/jquery.ui.all.css">
<link rel="stylesheet" href="../css/form.css" type="text/css" media="all">

<script src="../jquery/ui/jquery.ui.core.js"></script>
	<script src="../jquery/ui/jquery.ui.widget.js"></script>
	<script src="../jquery/ui/jquery.ui.datepicker.js"></script>
    	<script src="../jquery/ui/jquery.ui.mouse.js"></script>
	<script src="../jquery/ui/jquery.ui.draggable.js"></script>
	<!--ajax 3-->
	 <script type="../text/javascript" src="ajax.js"></script>
<!--calendario-->
<script>
	$(function() {
		$( "#datepicker" ).datepicker();
		$( "#format" ).change(function() {
			$( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
		});
	});
	</script>
    <style>
	#draggable { width: 120px; height: 100px; padding: 0.50em; }
	</style>
	<script>
	$(function() {
		$( "#draggable" ).draggable();
	});
	</script>
	<!--validar solo numeros -->
	
	<script type="text/javascript">
            $(function(){
                //Para escribir solo numeros    
                $('#miCampo2').validCampoFranz('0123456789');
                $('#miCampo3').validCampoFranz('0123456789');
                $('#miCampo4').validCampoFranz('0123456789');
				 $('#miCampo5').validCampoFranz('0123456789');
				  $('#miCampo6').validCampoFranz('0123456789');
                    
            });
        </script>   
		
		<!--validar campos ajax-->
	
</head>
<body id="page5">
<div class="body2">

	
	<div class="main"><div class="ic"> </div>
<!--header -->
		<header>
			<div class="wrapper">
				
				<nav>
					<ul id="menu">
						<li><center><figure class="left marg_right1"></figure>
						</center><div class="text1"></span></div></li>
						<li><a onClick="return confirm('Esta seguro que desea ingresar al menu inicio? perderas los registros que no se hayan guardado');" href="../index.php">Inicio</a></li>
						<li id="menu_active" class="bg_none"><a onClick="return confirm('Esta seguro que desea ingresar a la ficha de pacientes? perderas los registros que no se hayan guardado');" href="historiap.php">Ficha de paciente </a></li>
						<li id="menu_active" class="bg_none"><a onClick="return confirm('Esta seguro que desea ingresar a la lista de pacientes? perderas los registros que no se hayan guardado');" href="pacienteslista.php">Lista de paciente </a></li>
						<li><a onClick="return confirm('Esta seguro que desea ingresar al menu pabellon? perderas los registros que no se hayan guardado');" href="../cirugia/pabellonmenu.php">Calendario</a></li>
						<li><a onClick="return confirm('Esta seguro que desea ingresar al menu inventario? perderas los registros que no se hayan guardado');" href="../inventario/indexinventario.php">Inventario</a></li>
						<li><a onClick="return confirm('Esta seguro que desea ingresar al menu sistema? perderas los registros que no se hayan guardado');"href="../sistema/sistemamenu.php">Sistema</a></li>
						<li><a onClick="return confirm('Esta seguro que deseas salir del sistema? perderas los registros que no se hayan guardado');"href="../cerrar.php">Salir </a></li>
					</ul>
				</nav>
				<?//?>
			</div>
			
		</header>
	</div>
</div>
<!--header end-->
<!--content -->

<?php
/*codigo php*/


$var1="";
$var2="";
$var3="";
$var4="";
$var5="";
$var6="";
$var7="";
$var8="";
$var9="";
$var10="";
$var11="";
$var12="";
$var13="";
$var14="";
$var15="";
$var16="";
$var17="";
$var18="";
$var19="";
$var20="";
$var21="";
$var22="";
$var23="";
$var24="";
$var25="";
$var26="";

//buscar por nombre
 
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];

	if($btn=="Buscar"){

$sql="select * from pacientep where p_nom='$bus'";


$cs=mysqli_query($cn,$sql);
while($resul=mysqli_fetch_array($cs)){
	$var=$resul[0];
	$var1=$resul[1];
	$var2=$resul[2];
	$var3=$resul[3];
	$var4=$resul[4];
	$var5=$resul[5];
	$var6=$resul[6];
	$var7=$resul[7];
	$var8=$resul[8];
	$var9=$resul[9];
	$var10=$resul[10];
	$var11=$resul[11];
	$var12=$resul[12];
	$var13=$resul[13];
	$var14=$resul[14];
	$var15=$resul[15];
	$var16=$resul[16];
	$var17=$resul[17];
	$var18=$resul[18];
	$var19=$resul[19];
	$var20=$resul[20];
	$var21=$resul[21];
	$var22=$resul[22];
	$var23=$resul[23];
	$var24=$resul[24];
	$var25=$resul[25];
	$var26=$resul[26];
}
	if($var4=="M"){
		$var4="selected";
		}
	}
	
	}
	//ejemplo 2
	
	//buscar por codigo
 
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];

	if($btn=="Buscar"){

$sql="select * from pacientep where cod_alu='$bus'";


$cs=mysqli_query($cn,$sql);
while($resul=mysqli_fetch_array($cs)){
	$var=$resul[0];
	$var1=$resul[1];
	$var2=$resul[2];
	$var3=$resul[3];
	$var4=$resul[4];
	$var5=$resul[5];
	$var6=$resul[6];
	$var7=$resul[7];
	$var8=$resul[8];
	$var9=$resul[9];
	$var10=$resul[10];
	$var11=$resul[11];
	$var12=$resul[12];
	$var13=$resul[13];
	$var14=$resul[14];
	$var15=$resul[15];
	$var16=$resul[16];
	$var17=$resul[17];
	$var18=$resul[18];
	$var19=$resul[19];
	$var20=$resul[20];
	$var21=$resul[21];
	$var22=$resul[22];
	$var23=$resul[23];
	$var24=$resul[24];
	$var25=$resul[25];
	$var26=$resul[26];
}
	if($var4=="M"){
		$var4="selected";
		}
	}
	
	}
	///aqui corta
	//buscar por codigo
 
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];

	if($btn=="Buscar"){

$sql="select * from pacientep where p_ape='$bus'";


$cs=mysqli_query($cn,$sql);
while($resul=mysqli_fetch_array($cs)){
	$var=$resul[0];
	$var1=$resul[1];
	$var2=$resul[2];
	$var3=$resul[3];
	$var4=$resul[4];
	$var5=$resul[5];
	$var6=$resul[6];
	$var7=$resul[7];
	$var8=$resul[8];
	$var9=$resul[9];
	$var10=$resul[10];
	$var11=$resul[11];
	$var12=$resul[12];
	$var13=$resul[13];
	$var14=$resul[14];
	$var15=$resul[15];
	$var16=$resul[16];
	$var17=$resul[17];
	$var18=$resul[18];
	$var19=$resul[19];
	$var20=$resul[20];
	$var21=$resul[21];
	$var22=$resul[22];
	$var23=$resul[23];
	$var24=$resul[24];
	$var25=$resul[25];
	$var26=$resul[26];
}
	if($var4=="M"){
		$var4="selected";
		}
	}
	
	///aqui corta

if($btn=="Agregar Paciente Nuevo"){

$sql="select count(cod_alu),Max(cod_alu)  from pacientep ";
$cs=mysqli_query($cn,$sql);
while($resul=mysqli_fetch_array($cs)){
	$count=$resul[0];
	$max=$resul[1];

		}
		if($count==0){
		$var="A0001";
		}	
	else{
		$var="A".substr((substr($max,1)+10001),1);
		}
}


		
//guardaR evoluciones 
		
		//guardaR evoluciones ACTUALIZADAS
		
		if($btn=="Agregar"){
		
$cod=$_POST["txtcod"];
$fecha=strtoupper($_POST["fecha"]);	 
$diacno=strtoupper($_POST["diacno"]);
$trat=strtoupper($_POST["trat"]);
if($cod==""   or $diacno==""  or $trat=="" )
				{
				
					echo "
   <script> alert('no hay diacnostico')</script>
   ";
					echo "<br>";
					
				}
		else
		   {
$sql="INSERT INTO `clinica`.`evolucion` (`cod_alu` ,`fecha` ,`diacno` ,`trat`)VALUES ('$cod', '$fecha', '$diacno', '$trat')";

$cs=mysqli_query($cn,$sql);
		}}
		
		//GUARDAR EVOLUCIONES ACTUALIZADAS	
		
		//GUARDAR EVOLUCIONES
//calculo de la edad 

# PARAMETROS:
# $fecha_nacimiento - Fecha de nacimiento de una persona.
#
# $fecha_control - Fecha actual o fecha a consultar.
#
#
# EJEMPLO:
# tiempo_transcurrido('22/06/1977', '04/05/2009');
#
function tiempo_transcurrido($fecha_nacimiento, $fecha_control)
{
   $fecha_actual = $fecha_control;
   
   if(!strlen($fecha_actual))
   {
      $fecha_actual = date('d/m/y');
   }

   // separamos en partes las fechas 
   $array_nacimiento = explode ( "/", $fecha_nacimiento ); 
   $array_actual = explode ( "/", $fecha_actual ); 

   $anos =  $array_actual[2] - $array_nacimiento[2]; // calculamos años 
   $meses = $array_actual[1] - $array_nacimiento[1]; // calculamos meses 
   $dias =  $array_actual[0] - $array_nacimiento[0]; // calculamos días 

   //ajuste de posible negativo en $días 
   if ($dias < 0) 
   { 
      --$meses; 

      //ahora hay que sumar a $dias los dias que tiene el mes anterior de la fecha actual 
      switch ($array_actual[1]) { 
         case 1: 
            $dias_mes_anterior=31;
            break; 
         case 2:     
            $dias_mes_anterior=31;
            break; 
         case 3:  
            if (bisiesto($array_actual[2])) 
            { 
               $dias_mes_anterior=29;
               break; 
            } 
            else 
            { 
               $dias_mes_anterior=28;
               break; 
            } 
         case 4:
            $dias_mes_anterior=31;
            break; 
         case 5:
            $dias_mes_anterior=30;
            break; 
         case 6:
            $dias_mes_anterior=31;
            break; 
         case 7:
            $dias_mes_anterior=30;
            break; 
         case 8:
            $dias_mes_anterior=31;
            break; 
         case 9:
            $dias_mes_anterior=31;
            break; 
         case 10:
            $dias_mes_anterior=30;
            break; 
         case 11:
            $dias_mes_anterior=31;
            break; 
         case 12:
            $dias_mes_anterior=30;
            break; 
      } 

      $dias=$dias + $dias_mes_anterior;

      if ($dias < 0)
      {
         --$meses;
         if($dias == -1)
         {
            $dias = 30;
         }
         if($dias == -2)
         {
            $dias = 29;
         }
      }
   }

   //ajuste de posible negativo en $meses 
   if ($meses < 0) 
   { 
      --$anos; 
      $meses=$meses + 12; 
   }

   $tiempo[0] = $anos;
   $tiempo[1] = $meses;
   $tiempo[2] = $dias;

   return $tiempo;
}

function bisiesto($anio_actual){ 
   $bisiesto=false; 
   //probamos si el mes de febrero del año actual tiene 29 días 
     if (checkdate(2,29,$anio_actual)) 
     { 
      $bisiesto=true; 
   } 
   return $bisiesto; 
}



	
	if($btn=="Agregar"){

                //CON ESTOS DATOS CALCULAMOS LA FECHA DE NACIMIENTO
date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fecha2 = date('d/m/y');
//
 				$dia = $_POST['dia'];
                $mes = $_POST['mes'];
                $anio = $_POST['anio'];
                
                               $fecha_actual = date('Y');
 
				$b="$dia/$mes/$anio";		
				 $fecha_nacimiento = "$b";
   					$fecha_control = "$fecha2";
   $tiempo = tiempo_transcurrido($fecha_nacimiento, $fecha_control);
   $edad_Quetiene = "$tiempo[0] años con $tiempo[1] meses y $tiempo[2] días";
	$edad_Quetiene2 = $fecha_actual - $anio;

$cod=strtoupper($_POST["txtcod"]);
$nom=strtoupper($_POST["txtnom"]);
$ape=strtoupper($_POST["txtape"]);
$p_lugarn=strtoupper($_POST["p_lugarn"]);
$direc=strtoupper($_POST["direc"]);
$sex=strtoupper($_POST["sex"]);
$pedad=strtoupper($_POST["$edad_Quetiene"]);
$nmadre=strtoupper($_POST["nmadre"]);
$edadm=strtoupper($_POST["edadm"]);
$profm=strtoupper($_POST["profm"]);
$telm=strtoupper($_POST["telm"]);
$npadre=strtoupper($_POST["npadre"]);
$edadp=strtoupper($_POST["edadp"]);
$profp=strtoupper($_POST["profp"]);
$telp=strtoupper($_POST["telp"]);
$mc=strtoupper($_POST["mc"]);
$ea=strtoupper($_POST["ea"]);
$ant_p=strtoupper($_POST["ant_p"]);
$ant_f=strtoupper($_POST["ant_f"]);
$peso=strtoupper($_POST["peso"]);
$talla=strtoupper($_POST["talla"]);
$pc=strtoupper($_POST["pc"]);
$diacno=strtoupper($_POST["diacno"]);
$trat=strtoupper($_POST["trat"]);
$fecha=strtoupper($_POST["fecha"]);
$fechac2=strtoupper($_POST["$fechac"]);
$b1=strtoupper($_POST["$b"]);
$nameimagen = $_FILES['imagen']['name'];
$pedad2=strtoupper($_POST["$edad_Quetiene2"]);

$sql="insert into pacientep values('$cod','$nom','$ape','$p_lugarn',
'$direc','$sex','$edad_Quetiene','$nmadre','$edadm','$profm','$telm','$npadre',
'$edadp','$profp','$telp','$mc','$ea','$ant_p','$ant_f','$peso',
'$talla','$pc','$diacno','$trat','$fechac','$fecha','$b','$nameimagen','$edad_Quetiene2')";



$cs=mysqli_query($cn,$sql);
echo "<script> alert('se inserto correctamente')</script>";
		}
		
		//guardaR evoluciones ACTUALIZADAS
		
		if($btn=="Actualizar"){
		
$cod=$_POST["txtcod"];
$fecha=$_POST["fecha"];	 
$diacno=$_POST["diacno"];
$trat=$_POST["trat"];
if($cod=="")
				{
				
					echo "
   <script> alert('campos vacios')</script>
   ";
					echo "<br>";
					
				}
		else
		   {
$sql="INSERT INTO `clinica`.`evolucion` (`cod_alu` ,`fecha` ,`diacno` ,`trat`)VALUES ('$cod', '$fecha', '$diacno', '$trat')";

$cs=mysqli_query($cn,$sql);
		}}
		
		//GUARDAR EVOLUCIONES ACTUALIZADAS	
		

	if($btn=="Actualizar"){
$cod=$_POST["txtcod"];
$nom=$_POST["txtnom"];
$ape=$_POST["txtape"];
$p_lugarn=$_POST["p_lugarn"];
$direc=$_POST["direc"];
$sex=$_POST["sex"];
$nmadre=$_POST["nmadre"];
$edadm=$_POST["edadm"];
$profm=$_POST["profm"];
$telm=$_POST["telm"];
$npadre=$_POST["npadre"];
$edadp=$_POST["edadp"];
$profp=$_POST["profp"];
$telp=$_POST["telp"];
$mc=$_POST["mc"];
$ea=$_POST["ea"];
$ant_p=$_POST["ant_p"];
$ant_f=$_POST["ant_f"];
$peso=$_POST["peso"];
$talla=$_POST["talla"];
$pc=$_POST["pc"];
$diacno=$_POST["diacno"];
$trat=$_POST["trat"];

$fecha=$_POST["fecha"];
if($cod=="" or $nom=="" )
				{
				
					echo "
   <script> alert('campos vacios')</script>
   ";
					echo "<br>";
					
				}
		else
		   {

$sql="update pacientep set p_nom='$nom',p_ape='$ape',p_lugarn='$p_lugarn',direc='$direc',p_sex='$sex'  ,nmadre='$nmadre' 
,edadm='$edadm',profm='$profm' ,telm='$telm',npadre='$npadre',edadp='$edadp',profp='$profp',telp='$telp',mc='$mc',ea='$ea',ant_p='$ant_p'
,ant_f='$ant_f',peso='$peso',talla='$talla',pc='$pc',diacno='$diacno',trat='$trat'
where cod_alu='$cod'";




$cs=mysqli_query($cn,$sql);
echo "<script> alert('se actualiso correctamente')</script>";
		}
		}
		if($btn=="Eliminar Paciente Actual"){
$cod=$_POST["txtcod"];

$sql="delete from evolucion where cod_alu='$cod'";

$cs=mysqli_query($cn,$sql);
		}
	
		
		
		if($btn=="Eliminar Paciente Actual"){
$cod=$_POST["txtcod"];

$sql="delete from pacientep where cod_alu='$cod'";

$cs=mysqli_query($con,$sql);
echo "<script> alert('Se Elimino Correctamente')</script>";
		}


}

	






?>

<!---=================================================formulario===================================================-->

<div >
	<div class="main">
		<section id="content_top">
			<h2>Ficha de paciente</h2>


			<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../historiap/historiap.php">Perfil del paciente</a></li>
				<li class="breadcrumb-item"><a href="../historiap/razonC.php">Razon de la consulta</a></li>
				<li class="breadcrumb-item"><a href="../historiap/Areaad.php">Area administrativa</a></li>
				<li class="breadcrumb-item "><a href="../historiap/descrip.php">Descripcion economica</li>
				
				
				
			</ol>
			</nav>			
						
		</section>
			l<div class="container">
			<div cass="row">
				<div class="col-md-12 col-xs-12 col-sm-12">
			<form action="">
			
					<div class="container-form">
					 <div class="container">
						<h1>Perfil del paciente</h1>
						<br>
						<label class="perfil">Perfil<br></label><input type="submit" id="image" class="image">
						<label class="fecha">Fecha<br></label> <input  type="date" id="date" class="date">
						<p><label class="nombreapellido">Nombres y Apellidos:*<br></label> <input  type="text" class="nombreyapellido"><input type="text"class="nombreyapellido"></p>

						<p>Genero:<br>
							<input type="radio" name="hm">Masculino
							<input type="radio" name="hm">Femenino
						</p>
						
						<p>Direccion:*<br>
							<input type="text" name="adress">
						</p>

						<p>Fecha de nacimiento:*<br>
							<input type="datetime" id="daate">
						</p>

						<p>Telefono:*<br>
							<input type="text" id="cel">
						</p>

						<p>Cedula:*<br>
							<input type="number" id="ced">
						</p>
				</div>
				</div>


			</div>
				<div class="body4">
				<div class="main">
					<div id="footer_menu">
						<nav>
							<ul>
								<li><a href="pacienteslista.php">Listar</a></li>
								<li class="bg_none"><input type="submit" name="btn1" value="Agregar"/></li>
							</ul>
						</nav>
					</div>
				</div>
				</div>
				</div>
	
</form>
</div>
</div>
			</div>
				

  </div>
</div>
<!-- /.Horizontal Steppers -->
<script type="text/javascript"> Cufon.now(); </script>

</body>
</html>
