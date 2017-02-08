
<?
$link = mysql_connect("localhost", "root","123456"); 
mysql_select_db("restaurante", $link);
//$idx='861'; 
$result = mysql_query("SELECT v.vId,v.vCantidadProducto, v.vFecha,v.vIdTiket, v.vMesa, vd.vdId, vd.vd_Cantidad, vd.vd_Costo, vd.vd_Estado, p.pNombre,p.pPrecio ,per.pNombres, per.pApellidos from venta v inner JOIN venta_detalle vd on vd.vId=v.vId INNER JOIN productos p on vd.vd_idProducto = p.idProducto INNER JOIN persona per on v.vIdpersona = per.pId and vd.vId='$idx' and vd.vd_Cantidad > 0", $link); 

echo '<table width="334" class="testgrid">
  <tr>
    <td>Cant</td>
    <td>Producto</td>
	<td>Costo</td>
  </tr>';
if ($row = mysql_fetch_array($result)){ 
	echo 'Personal : '.$row["pNombres"].' '.$row["pApellidos"];
	do 
	{ 
   		//echo '<tr id="'.$row['vdId'].'" class="producto'.$row['vd_Estado'].'">
		
		echo '<tr id="'.$row['vdId'].'" class="producto0">
		
    	<th> '.$row["vd_Cantidad"].'<div id="estadoplato"></div></th>
    	<th><a onclick="javascript:actualizaestadoplato(\''.$row['vdId'].'\',\''.$row['vd_Estado'].'\'); return false;" href="#">'.$row["pNombre"].'</a></th>
  		
		<th> '.$row["vd_Costo"].'.00</th>
		
		</tr>';
		$Costo=$row["vd_Costo"]+$Costo;
		//<a onclick="javascript:actualizaestadomesa(\''.$getEstadoMesa['mNumero']. '\'); return false;" href="#">Completo </a>
		//echo 'Personal : '.$row["pNombres"].' '.$row["pApellidos"].' '.$row["Apellidos"].'Fijo : '.$row["Celular"].'';
		}
	while ($row = mysql_fetch_array($result)); 
    	}
	else 
	 	{ 
		echo 'agregar Cliente';
		} 
		echo '<tr class="producto0">';
		echo '<th> </th>';
		echo '<th> Total: </th>';
		echo '<th> '.$Costo.'.00</th>';
		echo '</tr>';
		
		
		echo '<div class="info"><a onclick="javascript:actualizaestadomesa(\''.$getEstadoMesaCaja['mNumero']. '\',\''.$Costo.'\',\'EFECTIVO\'); return false;" href="#">    <img src="imagenes/icono/efectivo.png" width="70" height="60" alt="cash" /></a>

<a onclick="javascript:actualizaestadomesa(\''.$getEstadoMesaCaja['mNumero']. '\',\''.$Costo.'\',\'VISA\'); return false;" href="#"><img src="imagenes/icono/visa.png" width="70" height="40" alt="visa" /></a>

<a onclick="javascript:actualizaestadomesadividir(\''.$getEstadoMesaCaja['mNumero']. '\',\''.$Costo.'\',\'VISA\'); return false;" href="#"><img src="imagenes/icono/dividir.png" width="60" height="60" alt="dividir" /></a></div>

';
		$Costo=0;
		echo '</table>';
	
		
		
?>      
        