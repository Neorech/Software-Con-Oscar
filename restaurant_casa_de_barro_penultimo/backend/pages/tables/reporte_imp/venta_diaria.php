<head>
    <meta charset="UTF-8">
    <title>Reporte de Almacén por Días</title>
    
  </head>

  <style>	
	.detallecajalinea {
	border: 1px solid #666;
    border-radius: 0;
    box-shadow: 4px 4px 4px #888888;
    margin: 0;
    padding: 0;
    width: 800px;
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.detallecajalinea table{
    border-collapse: collapse;
        border-spacing: 0;
	margin:0px;padding:0px;
}.detallecajalinea tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.detallecajalinea table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.detallecajalinea table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.detallecajalinea tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.detallecajalinea tr:hover td{
	
}
.detallecajalinea tr:nth-child(odd){ background-color:#e5e5e5; }
.detallecajalinea tr:nth-child(even)    { background-color:#ffffff; }.detallecajalinea td{
	vertical-align:middle;
	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:12px;
	font-size:12px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}.detallecajalinea tr:last-child td{
	border-width:0px 1px 0px 0px;
}.detallecajalinea tr td:last-child{
	border-width:0px 0px 1px 0px;
}.detallecajalinea tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.detallecajalinea tr:first-child td{
		background:-o-linear-gradient(bottom, #007fff 5%, #56aaff 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #007fff), color-stop(1, #56aaff) );
	background:-moz-linear-gradient( center top, #007fff 5%, #56aaff );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#007fff", endColorstr="#56aaff");	background: -o-linear-gradient(top,#007fff,56aaff);

	background-color:#007fff;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold;
	color:#ffffff;
}
.detallecajalinea tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #007fff 5%, #56aaff);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #007fff), color-stop(1, #56aaff) );
	background:-moz-linear-gradient( center top, #007fff 5%, #56aaff );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#007fff", endColorstr="#56aaff");	background: -o-linear-gradient(top,#007fff,56aaff);

	background-color:#007fff;
}
.detallecajalinea tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.detallecajalinea tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}
	
	
</style>

<script language="Javascript">

function imprimir() {
if (window.print)
window.print()
else
alert("Para imprimir presione Crtl+P.");
}
</script>
<? 
$ifecha=$_GET['ifecha'];
$ffecha=$_GET['ffecha'];

require_once('../model.php');
$getVentaDiarias = getVentaDiarias($idx,$ifecha,$ffecha);

	function minutos_transcurridos($fecha_i,$fecha_f)
{
$minutos = (strtotime($fecha_i)-strtotime($fecha_f))/60;
$minutos = abs($minutos); $minutos = floor($minutos);
return $minutos;
}
echo "<h3>CASA DE BARRO<br>REPORTE DE ALMACEN POR DIAS <br>Consulta realizada del: ".$ifecha."</h3>"; 
echo '<input type="button" name="imprimir" value="Imprimir" onclick="javascript:imprimir();">';

echo '<div id="detallecaja" class="detallecajalinea">';
echo '<table width="800" border="0">
  <tr>
    <th  scope="col">ID</th>
    <th  scope="col">PRODUCTO</th>
    <th  scope="col">SALDO</th>
    
	<th  scope="col">INGRESO FACTURA</th>
	<th  scope="col">TOTAL</th>
	<th  scope="col">STOCK FINAL</th>
	<th  scope="col">VENTA DEL DIA</th>
	<th  scope="col">FALTANTE O CONSUMO</th>
  	<th  scope="col">TOTAL SALIDA</th>
  </tr>';
foreach($getVentaDiarias as $getVentaDiaria): 
 	{		
	

	$numero=$numero+1;
	 
	$fechai=$getVenta['vFecha'];
	$fechaf=$getVenta['vFechaCaja'];
	
	
		$cantidad=$getVentaDiaria['aCantidad'];
		$almacen=$getVentaDiaria['ingresoalmacen'];
		$suma=$cantidad+$almacen;

	 	$sumaegreso=$getVentaDiaria['productosvendidos']+$getVentaDiaria['egresoalmace'];
		
		$total=$suma-$sumaegreso;
	 			echo '<tr>
                        <td>'.$numero.'</td>
                        <td>'.$getVentaDiaria['aProducto'].'</td>
                        <td>'.$getVentaDiaria['aCantidad'].'</td>
                        
                        <td>'.$getVentaDiaria['ingresoalmacen'].'</td>
						<td><div id="color">'.$suma.'</div></td>
						<td>'.$total.'</td>
						<td>'.$getVentaDiaria['productosvendidos'].'</td>
						<td>'.$getVentaDiaria['egresoalmace'].'</td>
						<td>'.$sumaegreso.'</td>
                      </tr>';
					  
					  $saldo= $saldo + $getVentaDiaria['aCantidad'];
					  $ingresoalmacen= $ingresoalmacen + $getVentaDiaria['ingresoalmacen'];
					  $total1= $total1 + $suma;
					  $stockfinal=$stockfinal + $total;
					  $ventadia = $ventadia + $getVentaDiaria['productosvendidos'];
					  $consumo= $consumo + $getVentaDiaria['egresoalmace'];
					  $totalsalida = $totalsalida + $sumaegreso;
					   
					  $totalcosto=$totalcosto + $getVenta['vCosto'];
					  $totalcostovisa=$totalcostovisa + $getVenta['vCostoVisa'];
					  $CantidadVentas=$CantidadVentas + 1;
 	}
 endforeach; 
 
 
 echo '<tr>
                        <td> - </td>
                        <td> TOTALES </td>
                        <td>'.$saldo.'</td>
                        
                        <td>'.$ingresoalmacen.'</td>
						<td><div id="color">'.$total1.'</div></td>
						<td>'.$stockfinal.'</td>
						<td>'.$ventadia.'</td>
						<td>'.$consumo.'</td>
						<td>'.$totalsalida.'</td>
                      </tr>';
					  
 
 
 
 
 
 
 
 
 
 
echo '</table>';
echo '</div>';
echo "<br>";
?>