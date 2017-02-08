<?
require_once('model.php');
$getProductoss = getProductoss($idx);
$cont = 1;
foreach($getProductoss as $getProductos): 
 	{		
	 echo 'Nombres :'.$getProductos['pNombre'].' Descripcion :'.$getProductos['pDescripcion'].' Precio: '.$getProductos['pPrecio'];
 	 echo "<a href='productos_modificar' value='$cont'> Modificar</a>".'</p>';
 	 $cont++;
 	}
 endforeach; 
//echo '</div>';

?>

<a href="productos_crear">Ingresar Nuevo Producto</a>
