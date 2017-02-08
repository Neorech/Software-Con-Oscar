<?php 
/****************************************************
    Para conectarnos con el mysql y la base de datos */
	$con = mysql_connect("localhost","root","123456");
	if(! $con){ die ("ERROR CONEXION MYSQL: " . mysql_error());}
	$db= mysql_select_db("restaurante",$con);
	if (! $db){die ("ERROR CONEXION BD: " . mysql_error());}
/*********************************************************
**********************************************************/	
/* verificamos si selecciono eliminar */
	if ($_POST['radio']=='elim'){ 
	//sentencia sql para eliminar
		$sql = "DELETE FROM productos WHERE codigo='".$_POST['codigo']."'";
		$result = mysql_query($sql);
		if (! $result){die ('ERROR AL ELIMINAR EL REGISTRO'. mysql_error());}
		else{echo "REGISTRO ELIMINADO CON EXITO";}
	}
/* verificamos si selecciono modificar */
	if ($_POST['radio']=='mod'){
	//sentencia sql para modificar
		$sql = "UPDATE almacen SET idAlmacen='".$_POST['id']."', nombre='".$_POST['nombre']."', precio=".$_POST['precio'].", existencia=".$_POST['existencia'];
		$result = mysql_query($sql);
		if (! $result){die ('ERROR AL MODIFICAR EL REGISTRO'. mysql_error());}
		else{echo "MODIFICACION EXITOSA";}
	}
?>