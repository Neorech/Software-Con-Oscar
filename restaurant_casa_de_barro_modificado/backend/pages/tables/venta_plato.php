<?
$ifecha=$_GET['ifecha'];
$ffecha=$_GET['ffecha'];
//echo "________________________".$ifecha;
require_once('model.php');
$getVentas = getVentas($idx,$ifecha,$ffecha);

$getVentaCantidadPlatos=getVentaCantidadPlatos($idx,$ifecha,$ffecha);

$id=1;
 foreach($getVentaCantidadPlatos as $getVentaCantidadPlato): 
 	{		
	
	if ($getVentaCantidadPlato['suma']> '0')
	{
	//<td>'.$getVentaCantidadPlato['vd_idProducto'].'</td>
	echo '
	<tr>
                      <td>'.$id.'</td>
                      <td>'.$getVentaCantidadPlato['pNombre'].'</td>
                      <td>'.$getVentaCantidadPlato['suma'].'</td>
                      <td><span class="label label-success">Detalle</span></td>
                      <td>Detalle de los platos</td>
                    </tr>';	
	$id=$id+ 1;
				//echo $getVentaCantidadPlato['suma'];
				//echo $getVentaCantidadPlato['pNombre'];
	 //echo $getProductoBase['pNombre'].' Precio :'.$getProductoBase['pPrecio'].'</p>' ;
	}
	}
 endforeach; 
 ?>