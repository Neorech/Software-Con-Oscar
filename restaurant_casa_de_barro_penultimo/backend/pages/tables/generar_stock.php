<?php

//include("mysqli.inc.php");
//$conexion=@mysqli_connect($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1);

$link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
mysql_query("SET NAMES 'utf8'");
$resultado=mysql_query("SELECT idAlmacen, aProducto, aFecha, aUnidadMedida, aCantidad FROM almacen", $link);


$hora = new DateTime();
$hora->setTimezone(new DateTimeZone('America/Bogota'));
$fecha=date($hora->format('Y/m/d H:i:s'));

echo "<table class='table table-hover'>";
    //echo "<td colspan=5 align=center>Para modificar escribe en la casilla correspondiente</td><tr>";
        //echo "<td colspan=4 align=center>Datos del aspirante</td>";
    //echo "<td align=center>Puntuacion</td><tr>";
	

    echo "<form name='modificar' method=\"POST\" action='almacen_registro.php'>";
	//echo "<select id='tipoalmacen' name='tipoalmacen'><option>Ingreso</option><option>Egreso</option></select>";
echo "<td colspan=5><span class='label label-success'>Detalle del Ingreso: </span><input type=text size='100%' name=concepto ></td><tr>";
echo"<tr>
                      <th>ID</th>
                      <th>Descripcion</th>
                      <th>Fecha</th>
                      <th>Medida</th>
                      <th>Cantidad</th>
                    </tr>";
while($salida = mysql_fetch_row($resultado)){
       
	   
	   mysql_query("INSERT INTO almacendia (idAlmacen, aProducto, aCantidad, aFecha, aUnidadMedida) VALUES ('".$salida[0]."', '".$salida[1]."', '".$salida[4]."', '$fecha', '".$salida[3]."')");

	   
	   echo "_____________________";
	   echo "<td>",$salida[0],"</td>";
	   echo "<td>",$salida[1],"</td>";
	   echo "<td>",$salida[2],"</td>";
	   echo "<td>",$salida[3],"</td>";
	   
	   if ($salida[4]>6)
	   {
	   echo "<td><div id='fin'>",$salida[4],"</div></td><tr>";
	   }
	   else 
	   {
	   echo "<td><div id='pen'>",$salida[4],"</div></td><tr>";
	   }
	   /*for ($i=0;$i<5;$i++){

        if($i!=4){

    echo "<td>",$salida[$i],"</td>";
        }else{
        echo "<td>",$salida[4],"</td><tr>";
    }

        }*/

}

         mysql_close($link);
		 echo '<script language="javascript">window.location="../../../demo/inicio.php"</script>';
		 /*echo '<script language="javascript">window.location="../backend/pages/tables/generar_stock.php"</script>';*/

?>
<!--<td colspan=5 align=center><br><input type=submit value='Ingresar Registro'>&nbsp;<input type=reset value='Borrar'>
-->
</form></table>