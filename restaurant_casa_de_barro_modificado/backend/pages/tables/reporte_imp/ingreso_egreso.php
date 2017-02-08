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



//echo "________________________".$ifecha;
require_once('../model.php');
$getVentasie = getVentasie('Ingreso',$ifecha,$ffecha);


include('cabecera_empresa.php');
echo "<h3>REPORTE INGRESOS Y EGRESOS POR PRODUCTO <br>Consulta realizada del: ".$ifecha." al ".$ffecha."</h3>"; 
echo '<input type="button" name="imprimir" value="Imprimir" onclick="javascript:imprimir();">';
//echo "<br>";


echo '<div id="detallecaja" class="detallecajalinea">';
echo '<table width="800" border="0">
  <tr>
    <th  scope="col">ID</th>
    <th  scope="col">PRODUCTO</th>
    <th  scope="col">TOTAL</th>
	<th  scope="col">MOVIMIENTO</th>
    
 
	
  </tr>';
foreach($getVentasie as $getVentaie): 
 	{		
	

	$numero=$numero+1;
	 
	$fechai=$getVenta['vFecha'];
	$fechaf=$getVenta['vFechaCaja'];
		
	$total= $getVenta['vCosto'] + $getVenta['vCostoVisa'];
	 
	 			echo '<tr>
                        <td>'.$numero.'</td>
                        <td>'.$getVentaie['aProducto'].'</td>
                        <td>'.$getVentaie['total'].' '.$getVenta['pApellidos'].'</td>
                        <td>'.$getVentaie['acMovimiento'].'</td>
                         
						
                      </tr>';
					  $totalcosto=$totalcosto + $getVenta['vCosto'];
					  $totalcostovisa=$totalcostovisa + $getVenta['vCostoVisa'];
					  $CantidadVentas=$CantidadVentas + 1;
	 //echo $getProductoBase['pNombre'].' Precio :'.$getProductoBase['pPrecio'].'</p>' ;
 	}
 endforeach; 
 /*echo '<tr>
    <th scope="col">Fecha</th>
    <th scope="col">Personal</th>
    <th scope="col">Mesa</th>
    <th scope="col">Costo</th>
  </tr>';*/
echo '</table>';
echo '</div>';
 
 
 
 
 $getVentasie = getVentasie('Egreso',$ifecha,$ffecha);


//include('cabecera_empresa.php');
//echo "<h3>REPORTE INGRESOS Y EGRESOS <br>Consulta realizada del: ".$ifecha." al ".$ffecha."</h3>"; 
//echo '<input type="button" name="imprimir" value="Imprimir" onclick="javascript:imprimir();">';
echo "<br>";
echo "<br>";


echo '<div id="detallecaja" class="detallecajalinea">';
echo '<table width="800" border="0">
  <tr>
    <th  scope="col">ID</th>
    <th  scope="col">PRODUCTO</th>
    <th  scope="col">TOTAL</th>
	<th  scope="col">MOVIMIENTO</th>
    
 
	
  </tr>';
foreach($getVentasie as $getVentaie): 
 	{		
	

	$numero=$numero+1;
	 
	$fechai=$getVenta['vFecha'];
	$fechaf=$getVenta['vFechaCaja'];
		
	$total= $getVenta['vCosto'] + $getVenta['vCostoVisa'];
	 
	 			echo '<tr>
                        <td>'.$numero.'</td>
                        <td>'.$getVentaie['aProducto'].'</td>
                        <td>'.$getVentaie['total'].' '.$getVenta['pApellidos'].'</td>
                        <td>'.$getVentaie['acMovimiento'].'</td>
                         
						
                      </tr>';
					  $totalcosto=$totalcosto + $getVenta['vCosto'];
					  $totalcostovisa=$totalcostovisa + $getVenta['vCostoVisa'];
					  $CantidadVentas=$CantidadVentas + 1;
	 //echo $getProductoBase['pNombre'].' Precio :'.$getProductoBase['pPrecio'].'</p>' ;
 	}
 endforeach; 
 /*echo '<tr>
    <th scope="col">Fecha</th>
    <th scope="col">Personal</th>
    <th scope="col">Mesa</th>
    <th scope="col">Costo</th>
  </tr>';*/
echo '</table>';
echo '</div>';
 
//echo '</div>';
//echo "<br>";
//echo "Total Ventas Realizadas: <h4 class='box-title'> Efectivo ".$totalcosto." Nuevos Soles.</h4>";	 
//echo "<br>";
//echo "<h4 class='box-title'> Visa ".$totalcostovisa." Nuevos Soles.</h4>";	 
//$total=$totalcosto + $totalcostovisa;
//echo "<h4 class='box-title'> Total ".$total." Nuevos Soles.</h4>";	 

//echo "<br>";
//echo "Cantidad de Ventas Realizadas: <h4 class='box-title'>".$CantidadVentas." Ventas Registradas.</h4>";	 
//echo "<br><br>";
//echo '7899999999999999999999999999999999999999999999999';
?>

<!--<a href="productobase_crear"> Nuevo Producto Base</a>-->
