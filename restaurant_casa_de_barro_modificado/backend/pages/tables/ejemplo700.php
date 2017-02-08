<?php

include("mysqli.inc.php");
$conexion=@mysqli_connect($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1);

$resultado=mysqli_query($conexion, "SELECT idAlmacen, aProducto, aFecha, aUnidadMedida, aCantidad FROM almacen");

echo "<table class='table table-hover'>";
    //echo "<td colspan=5 align=center>Para modificar escribe en la casilla correspondiente</td><tr>";
        //echo "<td colspan=4 align=center>Datos del aspirante</td>";
    //echo "<td align=center>Puntuacion</td><tr>";
	

    echo "<form name='modificar' method=\"POST\" action='almacen_registro.php'>";
	echo "<select id='tipoalmacen' name='tipoalmacen'>
<option>Ingreso</option>
<option>Egreso</option>
</select>";
echo "<td colspan=5><span class='label label-success'>Detalle del Ingreso: </span><input type=text size='100%' name=concepto ></td><tr>";
echo"<tr>
                      <th>ID</th>
                      <th>Descripcion</th>
                      <th>Fecha</th>
                      <th>Medida</th>
                      <th>Cantidad</th>
                    </tr>";
while($salida = mysqli_fetch_row($resultado)){
       for ($i=0;$i<5;$i++){

        if($i!=4){

    echo "<td>",$salida[$i],"</td>";
        }else{
        echo "<td><input type=text size=8 name=ident[$salida[0]] placeholder='0'></td><tr>";
    }

        }

}

         mysqli_close($conexion);

?>
<td colspan=5 align=center><br><input type=submit value='Ingresar Registro'>&nbsp;<input type=reset value='Borrar'>

</form></table>