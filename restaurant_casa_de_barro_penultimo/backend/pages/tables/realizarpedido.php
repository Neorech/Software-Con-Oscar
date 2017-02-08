<?
session_start();
mysql_connect ("localhost", "root", "123456");
mysql_select_db("restaurante");
$observacion= $_GET["observaciones"];
$hora = new DateTime();
$hora->setTimezone(new DateTimeZone('America/Bogota'));
$fecha=date($hora->format('Y/m/d H:i:s'));

$idpersona=$_SESSION['persona'];
$idmesa=$_SESSION['mesa'];
	if ($idpersona==null)
	{
	echo '<div id="10668">Seleccione una persona</div>';
	exit;
	}
	if ($idmesa==null)
	{
	echo '<div id="10668">Seleccione una mesa</div>';
	exit;
	}

$rsmesa = mysql_query("SELECT mPago FROM mesa where mId='$idmesa'");
mysql_query("UPDATE mesa SET mEstado= '1', mPago = '1' where mId =".$idmesa." ;");
if ($rowmesa = mysql_fetch_row($rsmesa)) {
$idmesaestado = trim($rowmesa[0]);
}
echo "mesa estado: ".$idmesaestado;

$rspedidomesa = mysql_query("SELECT vId,vCantidadProducto, vFecha, vIdpersona, vIdTiket, vMesa, vEstado FROM `venta` where vMesa = '$idmesa' order by vId desc limit 1");
//insertar pedido extra
if ($idmesaestado==1)
{
if ($rowpedidomesa = mysql_fetch_row($rspedidomesa)) {
$idpedidomesa = trim($rowpedidomesa[0]);
}
echo "mesa pedido mesa: ".$idpedidomesa;

foreach ($_SESSION["arr"] as $valor){
//echo 'id: '. $valor['id'].'id: '. $valor['cantidad'].'<br/>';
mysql_query("INSERT INTO venta_detalle(vId,vd_idProducto, vd_Cantidad, vd_Costo) VALUES ('$idpedidomesa','".$valor['id']."','".$valor['cantidad']."','".$valor['costo']."')");

	//Actualiza Almacen 
	//mysql_query("update mesa set mFecha='$fecha' where mId='$idmesa'");	
	$resultalmacen = mysql_query("select idProductoAlmacen, idProducto, idAlmacen, paCantidad  from productoalmacen where idProducto='".$valor['id']."'"); 
	if ($rowalmacen = mysql_fetch_array($resultalmacen)){ 
	do 
	{ 
   		//echo 'id Producto : '.$rowalmacen["idProducto"].'  '.$rowalmacen["idAlmacen"].'  '.$rowalmacen["paCantidad"].'<br/>';
		mysql_query("UPDATE almacen SET aCantidad = aCantidad - ".($rowalmacen["paCantidad"]*$valor['cantidad'])." where idAlmacen =".$rowalmacen["idAlmacen"]." ");
		}
	while ($rowalmacen = mysql_fetch_array($resultalmacen)); 
    	}
	//Actualiza Almacen 
	//mysql_query("UPDATE venta SET vCantidadProducto = '20', vFecha= '16/09/1986' ,vIdusuario='1',vIdTiket='5'");
}
 echo "<div id='10668'>Pedido Realizado</div>"; 
 echo "<script languaje='javascript'>alert('pedido registrado. ')</script>";
 session_destroy();
}
//insertar pedido extra















else
{
//echo "persona" .$idpersona;
mysql_query("update mesa set mFecha='$fecha', mEstado='1' where mId='$idmesa'");


mysql_query("INSERT INTO venta (vCantidadProducto, vFecha, vIdpersona,vMesa,vObservacion) VALUES ('20','$fecha','$idpersona','$idmesa','$observacion')");

$rs = mysql_query("SELECT MAX(vId) AS id FROM venta");
if ($row = mysql_fetch_row($rs)) {
$idultimo = trim($row[0]);
}

//echo $idultimo;

foreach ($_SESSION["arr"] as $valor){
//echo 'id: '. $valor['id'].'id: '. $valor['cantidad'].'<br/>';
mysql_query("INSERT INTO venta_detalle(vId,vd_idProducto, vd_Cantidad, vd_Costo) VALUES ('$idultimo','".$valor['id']."','".$valor['cantidad']."','".$valor['costo']."')");

	//Actualiza Almacen 
	//mysql_query("update mesa set mFecha='$fecha' where mId='$idmesa'");	
	$resultalmacen = mysql_query("select idProductoAlmacen, idProducto, idAlmacen, paCantidad  from productoalmacen where idProducto='".$valor['id']."'"); 
	if ($rowalmacen = mysql_fetch_array($resultalmacen)){ 
	do 
	{ 
   		//echo 'id Producto : '.$rowalmacen["idProducto"].'  '.$rowalmacen["idAlmacen"].'  '.$rowalmacen["paCantidad"].'<br/>';
		mysql_query("UPDATE almacen SET aCantidad = aCantidad - ".($rowalmacen["paCantidad"]*$valor['cantidad'])." where idAlmacen =".$rowalmacen["idAlmacen"]." ");
		}
	while ($rowalmacen = mysql_fetch_array($resultalmacen)); 
    	}
	//Actualiza Almacen 
	//mysql_query("UPDATE venta SET vCantidadProducto = '20', vFecha= '16/09/1986' ,vIdusuario='1',vIdTiket='5'");
}
 echo "<div id='10668'>Pedido Realizado</div>"; 
 echo "<script languaje='javascript'>alert('pedido registrado. ')</script>";
 session_destroy();
 /*sleep(2);
 header('Location: http://localhost/restaurant/demo/inicio.php');
*/
echo'<script type="text/javascript">
window.location="inicio.php";
</script>';
	
}
?>