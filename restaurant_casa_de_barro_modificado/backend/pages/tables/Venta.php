<style>

</style>
<?
$ifecha=$_GET['ifecha'];
$ffecha=$_GET['ffecha'];
//echo "________________________".$ifecha;
require_once('model.php');
$getVentas = getVentas($idx,$ifecha,$ffecha);

/*$getVentaCantidadPlatos=getVentaCantidadPlatos($idx,$ifecha,$ffecha);


 foreach($getVentaCantidadPlatos as $getVentaCantidadPlato): 
 	{		
	

	 			echo $getVentaCantidadPlato['vId'];
				echo $getVentaCantidadPlato['suma'];
				echo $getVentaCantidadPlato['pNombre'];
	 //echo $getProductoBase['pNombre'].' Precio :'.$getProductoBase['pPrecio'].'</p>' ;
 	}
 endforeach; 
*/



	function minutos_transcurridos($fecha_i,$fecha_f)
{
$minutos = (strtotime($fecha_i)-strtotime($fecha_f))/60;
$minutos = abs($minutos); $minutos = floor($minutos);
return $minutos;
}

foreach($getVentas as $getVenta): 
 	{		
	

	$numero=$numero+1;
	 
	$fechai=$getVenta['vFecha'];
	$fechaf=$getVenta['vFechaCaja'];
	
	if ($fechaf=='0000-00-00 00:00:00')
	{
		$estado='<div id="pen">PENDIENTE</div>';
		$diferencia_dias='-';
	}
	else 
	{
		$estado='<div id="fin">FINALIZADO</div>';
		$diferencia_dias= minutos_transcurridos($fechai,$fechaf);
	}
		
	
	 
	 			echo '<tr>
                        <td>'.$numero.'</td>
                        <td>'.$getVenta['vFecha'].'</td>
                        <td>'.$getVenta['pNombres'].' '.$getVenta['pApellidos'].'</td>
                        <td>'.$diferencia_dias.'</td>
                        <td>'.$getVenta['vMesa'].'</td>
						<td>'.$getVenta['vCosto'].'</td>
						<td>'.$getVenta['vCostoVisa'].'</td>
						<td>'.$estado.'</td>
                      </tr>';
					  $totalcosto=$totalcosto + $getVenta['vCosto'];
					  $totalcostovisa=$totalcostovisa + $getVenta['vCostoVisa'];
					  $CantidadVentas=$CantidadVentas + 1;
	 //echo $getProductoBase['pNombre'].' Precio :'.$getProductoBase['pPrecio'].'</p>' ;
 	}
 endforeach; 
//echo '</div>';
echo "<h3>Consulta realizada del: ".$ifecha." al ".$ffecha."</h3>"; 
echo "<br>";
echo "Total Ventas Realizadas: <h4 class='box-title'> Efectivo ".$totalcosto." Nuevos Soles.</h4>";	 
echo "<br>";
echo "Total Ventas Realizadas: <h4 class='box-title'> Visa ".$totalcostovisa." Nuevos Soles.</h4>";	 
echo "<br>";
echo "Cantidad de Ventas Realizadas: <h4 class='box-title'>".$CantidadVentas." Ventas Registradas.</h4>";	 
echo "<br><br>";
//echo '7899999999999999999999999999999999999999999999999';
?>