<?
require_once('model.php');
$getProductoBases = getProductoBases($idx);
foreach($getProductoBases as $getProductoBase): 
 	{		
	 echo 'Nombres :'.$getProductoBase['pNombre'].' Precio :'.$getProductoBase['pPrecio'].'</p>' ;
 	}
 endforeach; 
//echo '</div>';

?>

<a href="productobase_crear"> Nuevo Producto Base</a>
