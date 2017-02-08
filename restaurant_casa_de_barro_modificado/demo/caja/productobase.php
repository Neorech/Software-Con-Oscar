<style>
	
	.detallecajalinea {
	border: 1px solid #666;
    border-radius: 0;
    box-shadow: 4px 0px 4px #888888;
    margin: 0;
    padding: 0;
    width: 404px;
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
#detallecaja {
    position: relative;
    float: left;
	height:100%;
	background:#d1d1d1;
}
	
</style>
<?
require_once('model.php');
//$getVentas = getVentas($idx);
/*$ifecha=$_GET['ifecha'];
$ffecha=$_GET['ffecha'];
*/
//$ifecha=date("Y-m-d");
//$ffecha=date("Y-m-d");

$hora = new DateTime();
$hora->setTimezone(new DateTimeZone('America/Bogota'));
$ffecha=date($hora->format('Y/m/d'));
$ifecha=date($hora->format('Y/m/d'));
//$ifecha=date($hora->format('Y/m/d H:i:s'));
//echo '____________________________________'.$ifecha;
$getVentas = getVentas($idx,$ifecha,$ffecha);
echo '<div id="detallecaja" class="detallecajalinea">';
//echo '____________________________________'.$ifecha;

echo '<div id="dividirformulario">mensaje administracion caja</div>';

echo '<table width="380" border="0">
  <tr>
    <th width="111" scope="col">Hora</th>
    <th width="95" scope="col">Persona</th>
    <th width="53" scope="col">Mesa</th>
    <th width="60" scope="col">Efec</th>
	<th width="60" scope="col">Visa</th>
	<th width="60" scope="col">Est</th>
  </tr>';
foreach($getVentas as $getVenta): 
 	{		
	 $hora = substr($getVenta['vFecha'], 11); 
	 			echo '<tr>
                        
                        
						<td>'.$hora.'</td>
						
						<td>'.$getVenta['pNombres'].'</td>
                        
						<td>'.$getVenta['vMesa'].'</td>
                        <td>'.$getVenta['vCosto'].'<br></td>
						<td>'.$getVenta['vCostoVisa'].'<br></td>';
						/*if($getVenta['vEstado']==0)
						{
						echo '<td>Pendiente<br></td>';
						}
						else
						{
						echo '<td>Cancelado<br></td>';
						}*/
						$idx=$getVenta['vId'];
						echo '<td><a href="#" onclick="javascript:impresionticket(\''.$idx.'\',\'2015-05-17\'); return false;">
DETALLE</a><br></td>';
						
						
						
						
						
						
						
						
                      echo '</tr>';
	 //<td>'.$getVenta['vId'].'</td>
	 //<td>1.1</td><td><a href="#">A</a></td><td>Gecko</td>
	 //echo $getProductoBase['pNombre'].' Precio :'.$getProductoBase['pPrecio'].'</p>' ;
 	}
 endforeach; 
//echo '</div>';
/*echo '<tr>
    <th scope="col">Hora</th>
    <th scope="col">Personal</th>
    <th scope="col">Mesa</th>
    <th width="60" scope="col">Efec</th>
	<th width="60" scope="col">Visa</th>
  </tr>';*/
echo '</table>';
echo '</div>'
//<a href="productobase_crear"> Nuevo Producto Base</a>

?>

