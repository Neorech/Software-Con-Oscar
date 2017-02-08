<html>
<head>
<title>Modifica y/o Elimina</title>
</head>
<body>
<?php 
/****************************************************
    Para conectarnos con el mysql y la base de datos */
	$con = mysql_connect("localhost","root","123456");
	if(! $con){ die ("ERROR CONEXION MYSQL: " . mysql_error());}
	$db= mysql_select_db("restaurante",$con);
	if (! $db){die ("ERROR CONEXION BD: " . mysql_error());}
/*********************************************************
***** Selecciona el producto con codigo 1234*/	
	$sql = "SELECT * FROM almacen";
	
	$result = mysql_query ($sql);
//Verificamos que se haya ejecutado correctamente la consulta
if (! $result){
   echo "La consulta SQL contiene errores.".mysql_error();
   exit();
}else {
	echo "<form name='ejecuta' method='post' action='ejecuta.php'>";
	$i=0;
	echo "<table border='1'>
	         <tr>
			    <td>Id</td>
	            <td>Nombre</td>
				<td>Cantidad</td>
				<td>Fecha</td>
				<td>Unidad / Medida</td>
				<td>Modificar</td>
				<td>Eliminar</td>
			  </tr>";
/* mostramos los reultados en una tabla que nos permite seleccionar para eliminar 
o para modificar */
        //$row = mysql_fetch_row($result);
		
		while ($row = mysql_fetch_row($result)){ 
		echo "<tr><td><input type='text' name='id' value='".$row[0]."'/></td>
		      <td><input type='text' name='codigo' value='".$row[1]."'/></td>
		      <td><input type='text' name='nombre' value='".$row[2]."'/></td>
			  <td><input type='text' name='precio' value='".$row[3]."'/></td>
			  <td><input type='text' name='existencia' value='".$row[4]."'/></td>
			  <td><center><input type='radio' name='radio' value='mod'/></center></td>
 			  <td><center><input type='radio' name='radio' value='elim'/></center></td></tr>
		      ";
			  }
			  echo"</table><input type='submit' value='Ejecuta'></form>";	

} 
?>
</body>
</html>