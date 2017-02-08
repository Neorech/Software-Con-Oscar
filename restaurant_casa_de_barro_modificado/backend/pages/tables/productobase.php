<?
require_once('model.php');
$getProductoBases = getProductoBases($idx);
foreach($getProductoBases as $getProductoBase): 
 	{		
	 
	 			echo '<tr>
                        <td>Gecko</td>
                        <td>'.$getProductoBase['pNombre'].'</td>
                        <td>'.$getProductoBase['pPrecio'].'</td>
                        <td>1.1</td>
                        <td><a href="#">A</a></td>
                      </tr>';
	 
	 //echo $getProductoBase['pNombre'].' Precio :'.$getProductoBase['pPrecio'].'</p>' ;
 	}
 endforeach; 
//echo '</div>';

?>

<a href="productobase_crear"> Nuevo Producto Base</a>
