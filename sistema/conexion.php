<?php 

$con=mysqli_connect("localhost","root");
$bd=mysqli_select_db($con,"clinica");
 //convierto los acentos a html
 function chao_tilde($entra)
 {
 $traduce=array('�' => '$aacute;' , '�' => '$eacute;' , '�' => '$iacute;' , '�' => '$oacute;' , '�' => '$uacute;' , '�' => '$ntilde;' , '�' => '$Ntilde;' ,'�' => '$auml;' , '�' => '$euml;' , '�' => '$iuml;' , '�' => '$ouml;' , '�' => '$uuml;');
 $sale=strtr($entra , $traduce);
 return $sale; 
 }
?>