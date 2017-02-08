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
//$getVentas = getVentas($idx,$ifecha,$ffecha);
$getVentaCantidadPlatos=getVentaCantidadPlatos($idx,$ifecha,$ffecha);

echo "<h3>REPORTE VENTAS <br>Consulta realizada del: ".$ifecha." al ".$ffecha."</h3>"; 
echo '<input type="button" name="imprimir" value="Imprimir" onclick="javascript:imprimir();">';

echo '<div id="detallecaja" class="detallecajalinea">';
echo '<table width="800" border="0">
  <tr>
    <th  scope="col">ID</th>
    <th  scope="col">FECHA</th>
    <th  scope="col">ATENDIDO</th>
    
	<th  scope="col">MESA</th>
	<th  scope="col">TIEMPO</th>
	<th  scope="col">EFECTIVO</th>
	<th  scope="col">VISA</th>
	<th  scope="col">ESTADO</th>
  	<th  scope="col">COSTO</th>
  </tr>';
foreach($getVentaCantidadPlatos as $getVentaCantidadPlato): 
 	{			
	
	 
	 			echo '<tr>
                        <td>'.$numero.'</td>
                        <td>'.$getVentaCantidadPlato['vFecha'].'</td>
                        <td>'.$getVenta['pNombres'].' '.$getVenta['pApellidos'].'</td>
                        
                        <td>'.$getVenta['vMesa'].'</td>
						<td>'.$diferencia_dias.'</td>
						<td>'.$getVenta['vCosto'].'</td>
						<td>'.$getVenta['vCostoVisa'].'</td>
						<td>'.$estado.'</td>
						<td>'.$getVenta['vCosto'].'</td>
                      </tr>';
 	}
 endforeach; 
echo '</table>';
echo '</div>';
echo "<br>";


foreach($getVentaCantidadPlatos as $getVentaCantidadPlato): 
 	{		
echo '
<tr>
                      <td>'.$getVentaCantidadPlato['vd_idProducto'].'</td>
                      <td>'.$getVentaCantidadPlato['pNombre'].'</td>
                      <td>'.$getVentaCantidadPlato['suma'].'</td>
                      <td><span class="label label-success">Detalle</span></td>
                      <td>Detalle de los platos</td>
                    </tr>';	

				//echo $getVentaCantidadPlato['suma'];
				//echo $getVentaCantidadPlato['pNombre'];
	 //echo $getProductoBase['pNombre'].' Precio :'.$getProductoBase['pPrecio'].'</p>' ;
 	}
 endforeach; 

?>
