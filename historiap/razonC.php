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

<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-replace.js"></script> 
<script type="text/javascript" src="../js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_400.font.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/c675b21c5b.js" crossorigin="anonymous"></script>


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
            <li id="menu_active" class="bg_none"><a onClick="return confirm('Esta seguro que desea ingresar a la ficha de  pacientes? perderas los registros que no se hayan guardado');" href="historiap.php">Ficha de pacientes </a></li>
            <li id="menu_active" class="bg_none"><a onClick="return confirm('Esta seguro que desea ingresar a la lista de  pacientes? perderas los registros que no se hayan guardado');" href="pacienteslista.php">Lista de pacientes </a></li>
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




<div class="body3">
	<div class="main">
		
			
				
<section id="content_top"><h2>Ficha de paciente</h2>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="../historiap/historiap.php">Perfil del paciente</a></li>
    <li class="breadcrumb-item"><a href="../historiap/razonC.php">Razon de la consulta</a></li>
	<li class="breadcrumb-item"><a href="../historiap/Areaad.php">Area administrativa</a></li>
	<li class="breadcrumb-item active"><a href="../historiap/descrip.php">Descripcion economica</li>
	
  </ol>
</nav>			
			
		</section>
			
		
	</div>
</div>


<!--sectionformulario -->
<section id="content">

<div class="container">
      <div class="container-form1">
<h2>Razon de la consulta</h2>
<form action="">
    </li><label class="al">¿Has estado enfermo en los últimos años? <br>
        </label><br>
        <input type="radio" name="sino">Si
        <input type="radio" name="sino">No <br>
        <br>

         </li><label for="">¿Cual fue la causa? <br></label><br>
          <textarea class="form-control1" name="causa" id="" rows="3"></textarea> <br>
         <br>
  
        </li><label class="all">¿Esta tomando algun medicamento?<br><br>
        </label>
        <input type="radio" name="sino">Si 
        <input type="radio" name="sino">No <br> <br>

        </li><label class="all">¿Se ha congestionado del pecho?<br> <br>
        </label>
        <input type="radio" name="sino">Si
        <input type="radio" name="sino">No <br> <br>

        </li><label class="all">¿Se ha desmayado?<br><br>
        </label>
        <input type="radio" name="sino">Si
        <input type="radio" name="sino">No <br> <br> <label for="">¿Cual fue la causa?</label><br> <br>
        <textarea class="form-control2" name="causa" id="" rows="3"></textarea> <br> <br>
      </div>

      </li><label class="all">¿Es diabetico?<br><br>
    </label>
    <input type="radio" name="sino">Si
    <input type="radio" name="sino">No <br> <br>

    
    </li><label class="all">¿Ha tenido algun problema con anesesias?<br> <br>
    </label>
    <input type="radio" name="sino">Si
    <input type="radio" name="sino">No <br> <br>

    </li><label class="all">¿Esta embarazada?<br> <br>
    </label>
    <input type="radio" name="sino">Si
    <input type="radio" name="sino">No <br><br>

    </li><label class="all">¿ha tenido algun problema anterior con su boca?<br><br>
    </label>
    <input type="radio" name="sino">Si
    <input type="radio" name="sino">No <br> <br>

    </li><label class="all">¿Esta tomando algun medicamento?<br> <br>
        </label>
        <input type="radio" name="sino">Si
        <input type="radio" name="sino">No <br> <br>
        
    
  </li><label class="all">Seleccione su Problema:</label><br><br>
    </li><label class="all"><div class="form-group">
      <label for=""></label>
      <select multiple class="form-control3" name="" id=""> <br> <br>
        <option>Labios</option>
        <option>Vestibulos</option>
        <option>Paladar</option>
        <option>Rebordes alveolares</option>
        <option>Periodoncia</option>
        <option>oclusion</option>
        <option>Lengua</option>
        <option>Otros</option> <br><br> <br><br>
        <br><br>
        <br><br> </select>
        <br><br></li><label for="">Observaciones:<br></label><br>
          <textarea class="form-control1" name="causa" id="" rows="3"></textarea> <br>
         <br>
         <label class="trata">Tratamientos:</label><br><br>
         <table style="widows: 300px;">
          
           <tr>
             <td>Profilasis <input type="checkbox" class="check"></td>
             <td>Recubrimiento directo<input type="checkbox" class="check"></td>
             <td>Recubrimiento indirecto<input type="checkbox" class="check"></td>
           </tr>

           <tr>
             <td>Clase I<input type="checkbox" class="check"></td>
             <td>Clase II<input type="checkbox"class="check"></td>
             <td>Clase III<input type="checkbox"class="check"></td>
            </tr>

            <tr>
              <td>Clase IV<input type="checkbox"class="check"></td>
              <td>Clase V<input type="checkbox"class="check"></td>
              <td>Exodoncias simples<input type="checkbox"class="check"></td>
            </tr>
            <tr>
              <td>Cirujia colgajo<input type="checkbox"class="check"></td>
              <td>Cir. Periodontal<input type="checkbox"class="check"></td>
              <td>Pulpectomia<input type="checkbox"class="check"></td>
            </tr>
            <tr>
              <td>Pulpectomia ant.<input type="checkbox"class="check"></td>
              <td>Pulpectomia post<input type="checkbox"class="check"></td>
              <td>Pernos<input type="checkbox"class="check"></td>
            </tr>

            <tr>
              <td>Coronal vinil<input type="checkbox"class="check"></td>
              <td>Corona porc<input type="checkbox"class="check"></td>
              <td>Remov<input type="checkbox"class="check"></td>
            </tr>

            <tr>
              <td>Clase VR<input type="checkbox"class="check"></td>
              <td>Prot. total<input type="checkbox"class="check"></td>
              <td>Parciales acr.<input type="checkbox"class="check"></td>
            </tr>

            <tr>
              <td>Piezas remov<input type="checkbox"class="check"></td>
              <td>Cirugia terceros molares<input type="checkbox"class="check"></td>
              <td>Valplast<input type="checkbox"class="check"></td>
            </tr>

         </table>
        </div>

        <!-- footer-->
        <div class="body4">
	<div class="main">
		<div id="footer_menu">
			<nav>
			
	
					
	
  
  
     
     
   <ul>
					<li><a href="historiap.php"><input type="submit" class="btn btn-dark" value="Atras"></a></li>
					<li class="bg_none"><input type="submit" class=" btn btn-dark" name="btn1" value="Siguiente"/></li>
				</ul>
			</nav>
		</div>
	</div>
</div>
    
    
   
</form>


<div class="body5">
	<div class="main">
		<footer>
		@LogotipsMarketingBusiness
		<br>
		</footer>
	</div>
</div>
<!--footer end-->
<script type="text/javascript"> Cufon.now(); </script>