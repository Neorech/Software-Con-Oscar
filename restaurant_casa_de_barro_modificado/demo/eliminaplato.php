<?php
	session_start();
    include'config.php';
		$id=$_GET['id'];
		$estado=$_GET['estado'];
		if ($estado=='1')
		{
			$estado=0;
		}
		else
		{	
			$estado=1;
		}
		mysql_connect ($cserver, $cusuario, $cpassword);
		mysql_select_db("restaurante");

		$link = mysql_connect("localhost", "root","123456"); 
		mysql_select_db("restaurante", $link);
		//$sql=("UPDATE venta_detalle SET vd_Estado =$estado WHERE vdId =$id ");
		  $sql=("UPDATE venta_detalle SET vd_Costo= vd_Costo - (vd_Costo/vd_Cantidad), vd_Cantidad = vd_Cantidad - 1 , vd_Eliminado= vd_Eliminado + 1 WHERE vdId =$id ");

		
		mysql_query($sql);
		/*echo "<pre>";
		echo "Agenda Agregada.";
		echo "</pre>";
		*/



$result=mysql_query("SELECT  vdId ,vId ,vd_idProducto ,vd_Cantidad ,vd_Costo FROM venta_detalle where vdId= $id", $link);
		
		
		//foreach ($result as $valor){
			if ($valor = mysql_fetch_array($result))
			do 
	{
//echo 'id: '. $valor['id'].'id: '. $valor['cantidad'].'<br/>';
//mysql_query("INSERT INTO venta_detalle(vId,vd_idProducto, vd_Cantidad, vd_Costo) VALUES ('$idultimo','".$valor['vdId']."','".$valor['vd_Cantidad']."','".$valor['vd_Costo']."')");
	//echo $valor['vd_idProducto'];
	//Actualiza Almacen 
	//mysql_query("update mesa set mFecha='$fecha' where mId='$idmesa'");	
	$resultalmacen = mysql_query("select idProductoAlmacen, idProducto, idAlmacen, paCantidad  from productoalmacen where idProducto='".$valor['vd_idProducto']."'"); 
	if ($rowalmacen = mysql_fetch_array($resultalmacen)){ 
	do 
	{ 
   		//echo 'id Producto : '.$rowalmacen["idProducto"].'  '.$rowalmacen["idAlmacen"].'  '.$rowalmacen["paCantidad"].'<br/>';
		mysql_query("UPDATE almacen SET aCantidad = aCantidad + ".$rowalmacen["paCantidad"]." where idAlmacen =".$rowalmacen["idAlmacen"]." ");
		}
	while ($rowalmacen = mysql_fetch_array($resultalmacen)); 
    	}
	//Actualiza Almacen 
	//mysql_query("UPDATE venta SET vCantidadProducto = '20', vFecha= '16/09/1986' ,vIdusuario='1',vIdTiket='5'");
}
		
		
		
	
	while ($valor = mysql_fetch_array($result));	



?>