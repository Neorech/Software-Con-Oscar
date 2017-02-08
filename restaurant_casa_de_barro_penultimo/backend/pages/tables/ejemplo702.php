<?php
$tabla="demodat2";
/* incluimos los datos de conexión al servidor MySQL */
include("mysqli.inc.php");
$tabla="demodat2";

mysql_connect ("localhost", "root", "123456");
mysql_select_db("restaurante");
/******    Programación por procesos ***********/
#conexion  y seleccion de base de datos
//$conexion=@mysqli_connect($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1);

$tipoalmacen=$_POST['tipoalmacen'];
$concepto=$_POST['concepto'];
$hora = new DateTime();
$hora->setTimezone(new DateTimeZone('America/Bogota'));
$fecha=date($hora->format('Y/m/d H:i:s'));

mysql_query("INSERT INTO almacencontrol (acDetalle ,acFecha ,pId,acMovimiento)VALUES ('$concepto', '$fecha', '3','$tipoalmacen')");


$rsalmacencontrol = mysql_query("SELECT idAlmacenControl FROM almacencontrol order by idAlmacenControl desc limit 1");
//insertar pedido extra

if ($rowalmacencontrol = mysql_fetch_row($rsalmacencontrol)) {
$idalmacencontrol = trim($rowalmacencontrol[0]);
}
//echo "mesa pedido mesa: ".$idalmacencontrol;




foreach ($_POST['ident'] as $indice=>$valor){

	//print_r ($_POST['ident']);

//echo $valor;
//echo $indice.'<br>';
//$resultado=mysqli_query($conexion,"UPDATE demodat2 SET Puntos=$valor WHERE DNI=$indice ");
//echo $tipoalmacen;
if ($tipoalmacen=='Egreso')
{
$resultado=mysql_query("UPDATE almacen SET aCantidad=(aCantidad-$valor) WHERE idAlmacen=$indice ");
}
if ($tipoalmacen=='Ingreso')
{																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																		
$resultado=mysql_query("UPDATE almacen SET aCantidad=(aCantidad+$valor) WHERE idAlmacen=$indice ");
}

if($valor>0)
{
mysql_query("INSERT INTO almacencontroldetalle (idAlmacenControl, idAlmacen, acdCantidad) VALUES ('$idalmacencontrol', '$indice', '$valor');");
}



   }
#cerramos la conexion
//mysqli_close($conexion);
# cerramos la etiqueta PHP y desde HTML llamamos a la página que visualiza los valores
# si todo ha ido bien :-) los campos apareceran actualizados
echo 'Se agrego el registro correctamente para el concepto: <h4>'.$concepto.'</h4><br>';
?>

<script language="JavaScript">
//window.self.location="ejemplo700.php";
</script>