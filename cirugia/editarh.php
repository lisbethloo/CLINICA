<?php   
session_start();   
if(!isset($_SESSION['admin']))header("location: ../principal.php");  
 

?>
<?php require '../conexion2.php'; ?>

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
  $link=conectarse() ;
?>
<?php
date_default_timezone_set('America/caracas');
$hora2 = date('H:i:s a');
$fecha2 = date('d-m-Y ');

?>
<!DOCTYPE html>
<html lang="en"><head>
<title>Actualizar Cirugia</title>
<script src="../jquery/validarvacios.js"></script>
   <script src="../jquery/validar2.js"></script>
<meta charset="utf-8">
<link rel="stylesheet" href="reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">

<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-replace.js"></script> 
<script type="text/javascript" src="../js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_400.font.js"></script>



<link rel="stylesheet" href="../jquery/temas/base/jquery.ui.all.css">

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
						<li><a href="../index.php">Inicio</a></li>
						<li ><a href="../historiap/pacienteslista.php">Ficha de paciente</a></li>
						<li id="menu_active" class="bg_none"><a href="">Calendario</a></li>
						<li><a href="../inventario/indexinventario.php">Inventario</a></li>
						<li><a href="../sistema/sistemamenu.php">Sistema</a></li>
						<li><a href="../cerrar.php">Salir </a></li>
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

	if($btn=="ELIMINAR"){

$sql="select * from pabellonp where p_nom='$bus'";


$cs=mysqli_query($sql,$cn);
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
		
}
	
	}
	//ejemplo 2
	
	//buscar por codigo
 
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];

	if($btn=="Editar"){

$sql="select * from pabellonp where cod_alu='$bus'";


$cs=mysqli_query($sql,$cn);
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
		
}
	
	}
	///aqui corta
	//buscar por codigo
 //buscar por codigo
 
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];

	if($btn=="Eliminar"){

$sql="select * from pabellonp where cod_alu='$bus'";


$cs=mysqli_query($sql,$cn);
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

	}
	
	}
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];

	if($btn==""){

$sql="select * from pabellonp where p_ape='$bus'";


$cs=mysqli_query($sql,$cn);
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
	
	}
	
	///aqui corta

if($btn=="Agregar Paciente Nuevo"){

$sql="select count(cod_alu),Max(cod_alu)  from pabellonp ";
$cs=mysqli_query($sql,$cn);
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
$fecha=$_POST["fecha"];	 
$evolucion=$_POST["evolucion"];
$serv=$_POST["servicio"];

if($cod=="")
				{
				
					echo "
   <script> alert('campos vacios')</script>
   ";
					echo "<br>";
					
				}
		else
		   {
$sql="INSERT INTO `clinica`.`evolucionc` (`cod_alu` ,`fecha` ,`servicio` ,`evolucion`)VALUES ('$cod', '$fecha', '$serv','$evolucion')";

$cs=mysqli_query($sql,$cn);
		}}
		
		//GUARDAR EVOLUCIONES ACTUALIZADAS	
		
		//GUARDAR EVOLUCIONES

	
	if($btn=="Agregar"){
	
	 date_default_timezone_set('Mexico/General');
                $fecha_actual = date('Y');
                //CON ESTOS DATOS CALCULAMOS LA FECHA DE NACIMIENTO
                $dia = $_POST['dia'];
                $mes = $_POST['mes'];
                $anio = $_POST['anio'];
                $edad_Quetiene = $fecha_actual - $anio;
                
				$b="$dia/$mes/$anio";
	
$cod=$_POST["txtcod"];
$serv=$_POST["serv"];
$nom=$_POST["txtnom"];
$ape=$_POST["txtape"];
$sex=$_POST["sex"];
$pedad=$_POST["$edad_Quetiene"];
$edoc=$_POST["e_civil"];
$ocu=$_POST["ocupacion"];
$p_lugarn=$_POST["l_nacimiento"];
$b1=$_POST["$b"];
$nacio=$_POST["nacio"];
$direc=$_POST["direc_actual"];
$avisara=$_POST["avisara"];
$parentesco=$_POST["parentesco"];
$direc2=$_POST["direc2"];
$f_ingreso=$_POST["f_ingreso"];
$f_admi_ante=$_POST["f_admi_ante"];
$m_consul=$_POST["m_consul"];
$e_actual=$_POST["e_actual"];
$diacno_p=$_POST["diacno_p"];
$agre_c=$_POST["agre_c"];
$diac_p_f=$_POST["diac_p_f"];
$d_anatomo=$_POST["d_anatomo"];
$d_asoc=$_POST["d_asoc"];
$inter_p=$_POST["inter_p"];
$inter_s=$_POST["inter_s"];
$hora=$_POST["hora"];


$imagen=$_POST["imagen"];

$sql="insert into pabellonp values('$serv','$cod','$ape','$nom','$sex','$edoc'
,'$ocu','$p_lugarn','$b','$nacio','$direc','$f_ingreso','$f_admi_ante','$m_consul','$e_actual'
,'$diacno_p','$agre_c','$diac_p_f','$d_anatomo','$d_asoc','$inter_p','$inter_s','$edad_Quetiene','$avisara','$parentesco','$direc2','$hora')";



$cs=mysqli_query($sql,$cn);
echo "<script> alert('se inserto correctamente')</script>";
		}
		
		//guardaR evoluciones ACTUALIZADAS
		//guardaR evoluciones ACTUALIZADAS
		
		if($btn=="Actualizar"){
		
$cod=$_POST["txtcod"];
$fecha=$_POST["f_ingreso"];	 
$evolucion=$_POST["evolucion"];
$serv=$_POST["serv"];

if($cod=="")
				{
				
					echo "
   <script> alert('campos vacios')</script>
   ";
					echo "<br>";
					
				}
		else
		   {
$sql="INSERT INTO `clinica`.`evolucionc` (`cod_alu` ,`fecha` ,`servicio` ,`evolucion`)VALUES ('$cod', '$fecha', '$serv','$evolucion')";

$cs=mysqli_query($sql,$cn);
		}}
		
		//GUARDAR EVOLUCIONES ACTUALIZADAS	
			

	if($btn=="Actualizar"){
$cod=$_POST["txtcod"];
$serv=strtoupper($_POST["serv"]);
$nom = strtoupper($_POST["txtnom"]); //guardar en mayusculas
$ape=strtoupper($_POST["txtape"]);
$sex=strtoupper($_POST["sex"]);
$pedad=strtoupper($_POST["$edad_Quetiene"]);
$edoc=strtoupper($_POST["e_civil"]);
$ocu=strtoupper($_POST["ocupacion"]);
$p_lugarn=strtoupper($_POST["l_nacimiento"]);
$b1=strtoupper($_POST["$b"]);
$nacio=strtoupper($_POST["nacio"]);
$direc=strtoupper($_POST["direc_actual"]);
$avisara=strtoupper($_POST["avisara"]);
$parentesco=strtoupper($_POST["parentesco"]);
$direc2=strtoupper($_POST["direc2"]);
$f_ingreso=strtoupper($_POST["f_ingreso"]);
$f_admi_ante=strtoupper($_POST["f_admi_ante"]);
$m_consul=strtoupper($_POST["m_consul"]);
$e_actual=strtoupper($_POST["e_actual"]);
$diacno_p=strtoupper($_POST["diacno_p"]);
$diac_p_f=strtoupper($_POST["diac_p_f"]);
$d_anatomo=strtoupper($_POST["d_anatomo"]);
$d_asoc=strtoupper($_POST["d_asoc"]);
$inter_p=strtoupper($_POST["inter_p"]);
$inter_s=strtoupper($_POST["inter_s"]);
$hora=strtoupper($_POST["hora"]);
$agre_c=strtoupper($_POST["agre_c"]);

if($cod=="" or $nom=="" )
				{
				
					echo "
   <script> alert('campos vacios')</script>
   ";
					echo "<br>";
					
				}
		else
		   {

$sql="update pabellonp set '$cod','$nom','$ape','$p_lugarn',
'$direc','$sex','$edad_Quetiene','$nmadre','$edadm','$profm','$telm','$npadre',
'$edadp','$profp','$telp','$mc','$ea','$ant_p','$ant_f','$peso',
'$talla','$pc','$diacno','$trat','$fecha','$fechac','$b','$imagen'";




$cs=mysqli_query($sql,$cn);
echo "<script> alert('se actualiso correctamente')</script>";
		}
		}
		if($btn=="Eliminar Paciente Actual"){
$cod=$_POST["txtcod"];

$sql="delete from evolucionc where cod_alu='$cod'";

$cs=mysqli_query($sql,$cn);
		}
		
		
		
		if($btn=="Eliminar Paciente Actual"){
$cod=$_POST["txtcod"];

$sql="delete from pabellonp where cod_alu='$cod'";

$cs=mysqli_query($sql,$cn);
echo "<script> alert('Se Elimino Correctamente')</script>";
		}


}

	




$nameimagen = $_FILES['imagen']['name'];
$tmpimagen = $_FILES['imagen']['tmp_name'];
$extimagen = pathinfo ($nameimagen);
$ext = array("png","gif","jpg");
$urlnueva="../perfil/".$nameimagen;

if(is_uploaded_file($tmpimagen)){
	if(array_search($extimagen['extension'],$ext)){
	copy($tmpimagen,$urlnueva);
	
	}
}



?>


	<br>
		
			<center>	
				
			
		<form name="fe" action="" method="post"  enctype="multipart/form-data">
	
	<table width="90%" border="0">
  <tr border="0"> 
  <td width="30%">  </td>
  
    
    
  </tr>
  </table>
  <table width="90%" border="0">
  <tr  style="background: #CCCCCC">
   
    <td width="100%"> &nbsp; &nbsp; DATOS DEL PACIENTE 
	
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SERVICIO
      <input name='serv'  placeholder=".........................................................................................................."  type='text' maxlength='55' required   value="<?php echo $var ?>">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N�DE HISTORIA 
      <input name='txtcod'  placeholder=".........................................................................................................."  type='text' maxlength='55' required   value="<?php echo $var1 ?>"></td>
	  
  </tr>

  
  </table>
  <table width="90%" border="0">
  <tr>
   
    <td width="50%"> APELLIDO
      <input name='txtape'    type='text' maxlength='80' required  size='74' value="<?php echo $var2 ?>"></td>
    <td width="50%"> NOMBRE
      <input name='txtnom'  type='text' maxlength='98' required  size='76' value="<?php echo $var3 ?>"></td>
  </tr>
  </table>
  <table width="90%" border="0">
  <tr>
    <td width="10%">
	  SEXO <?php echo $var4 ?>
	</td>
    <td width="40%"> ESTADO CIVIL <input name='e_civil'  type='text'  size='53' maxlength='98' required   value="<?php echo $var5 ?>"></td>
    <td width="50%"> OCUPACION <input name='ocupacion'  type='text'  size='72' maxlength='98' required   value="<?php echo $var6 ?>"></td>
	
  </tr>
  </table>
  <table width="90%" border="0">
  <tr>
    <td>LUGAR DE NACIMIENTO<input name='l_nacimiento'  type='text'  size='40' maxlength='98'    value="<?php echo $var7 ?>"></td>
    <td> FECHA DE NACIMIENTO <input name='b'  type='text' maxlength='98'  size='76' value="<?php echo $var8 ?>"> 
      
       </td>
    <td> EDAD: 
          <?php echo $var21?></td>
		  <td> NACIONALIDAD:<input name='nacio'  type='text'  size='40' maxlength='98'    value="<?php echo $var9 ?>"> 
          </td>
  </tr>
  </table>
   
  <table  width="90%" border="0">
  <tr>
    <td width="100%">DIRECCION ACTUAL COMPLETA     
      <input name='direc_actual'  type='text'  size='142' maxlength='98'    value="<?php echo $var10 ?>"></td>
  </tr>
  </table>
  <table width="90%" border="0">
  <tr>
    
    <td width="50%">AVISAR EN CASO DE EMERGENCIAS A: <input name='avisara'  type='text'  size='45' maxlength='98'    value="<?php echo $var22 ?>"></td>
    <td width="50%">PARENTESCO <input name='parentesco'  type='text'  size='72' maxlength='98'   value="<?php echo $var23 ?>"></td>
  </tr>
  </table>
  <table width="90%" border="0">
  <tr>
    <td width="100%" > DIRECCION  <input name='direc2'  type='text'  size='162' maxlength='98'   value="<?php echo $var24 ?>"></td>
    
  </tr>
  </table>
  <table width="90%" border="0">
  <tr >
    <td width="30%">FECHA DE INGRESO  <input name='f_ingreso'  type='text'  size='' maxlength='98'    value="<?php echo $var11?>"></td>
   <td width="30%">HORA<input name='hora'  type='hora'  size='' maxlength='98'  value="<?php echo $var25?>"> </td>
	 <td width="30%">FECHA DE ADMISION ANTERIOR <input name='f_admi_ante'  type='text'  size='' maxlength='98'  value="<?php echo $var12?>"></td>
  </tr>
  </table>
  
  <table   width="90%" border="0">
  <tr  style="background: #CCCCCC">
    <td>&nbsp;&nbsp;&nbsp;MOTIVO DE LA CONSULTA</td>
   
  </tr>
</table>
<table width="90%" border="0">
  <tr>
    <td><input name='m_consul'   type='text'  size='180' maxlength='98'    value="<?php echo $var13?>"></td>

  </tr>
</table>
 <table   width="90%" border="0">
  <tr  style="background: #CCCCCC">
    <td>&nbsp;&nbsp;&nbsp;ENFERMEDAD ACTUAL   &nbsp;&nbsp;&nbsp;&nbsp;(hacer relato conciso y completo de las dolencias. indicando fecha de comienzo duracion y tratamento de cada una de ella)</td>
   
  </tr>
</table>
<table  width="90%" border="0">
  <tr>
    <td  width="100%"  ><textarea  name="e_actual"  class="element textarea medium" value="<?php echo $var14?>" > <?php echo $var14?></textarea></td>
  
  </tr>
</table  >
<table   width="90%" border="0">
  <tr  style="background: #CCCCCC">
    <td>&nbsp;&nbsp;&nbsp;</td>
   
  </tr>
</table>

<table  width="90%" border="0">
  <tr>
    <td width="75%"> DIAGNOSTICO PROVICIONAL &nbsp;&nbsp;&nbsp; <input name='diacno_p'  type='text'  size='95' maxlength='98'    value="<?php echo $var15?>"></td>
   <td width="30%" >
	 EGRESO DE CURACION  <input name='sex'  type='text' maxlength='98'   size='76' value="<?php echo $var26 ?>">
  
		</td>
  </tr>
</table>


  
		
    
 
<table  width="90%" border="0">
  <tr>
    <td>DIAGNOSTICO PRINCIPIO-FINAL &nbsp;&nbsp;&nbsp; <input name='diac_p_f'  type='text'  size='145' maxlength='98'  value="<?php echo $var16?>"></td>
 
  </tr>
</table>
<table  width="90%" border="0">
  <tr>
    <td>DIAGNOSTICO ANATOMOPATOLOGICO &nbsp;&nbsp;&nbsp; <input name='d_anatomo'  type='text'  size='110' maxlength='98'   value="<?php echo $var17?>"></td>
 
  </tr>
</table>
<table  width="90%" border="0">
  <tr>
    <td>DIAGNOSTICO ASOCIADO &nbsp;&nbsp;&nbsp; <input name='d_asoc'  type='text'  size='145' maxlength='98'   value="<?php echo $var18?>"></td>
 
  </tr>
</table>
<table  width="90%" border="0">
  <tr>
    <td>INTERVENCION PRINCIPAL &nbsp;&nbsp;&nbsp; <input name='inter_p'  type='text'  size='145' maxlength='98'   value="<?php echo $var19?>"></td>
 
  </tr>
</table>
<table  width="90%" border="0">
  <tr>
    <td>INTERVENCION SECUNDARIA &nbsp;&nbsp;&nbsp; <input name='inter_s'  type='text'  size='145' maxlength='98'   value="<?php echo $var20?>"></td>
 
  </tr>
</table>

<div  input type="submit"><a href="pacienteslista.php">Regresar a Lista De Pacientes</a></div>
	
	</center>
		
		
	
		
	

<div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
			</br>
				<ul>
					
					
					<li><input type="submit"  onClick="return confirm('Esta seguro que desea Editar esta consulta del paciente?');" name="btn1" value="Actualizar"/></li>
					<li><input type="submit" onClick="return confirm('Esta seguro que desea eliminar esta consulta del paciente?');" name="btn1" value="Eliminar Paciente Actual"/></li>
				</ul>
				</form>
			</nav>
		</div>
	</div>
</div>
    
    
   



<div class="body5">
	<div class="main">
		<footer>
			@LogotipsMarketingBusiness<br>
			Telf:(809)459-8909	</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>

</body>
</html>