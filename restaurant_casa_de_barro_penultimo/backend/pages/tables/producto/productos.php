<?
require_once('model.php');
$getProductoss = getProductoss($idx);
$cont = 1;
foreach($getProductoss as $getProductos): 
 	{		
	 //echo 'Nombres :'.$getProductos['pNombre'].' Descripcion :'.$getProductos['pDescripcion'].' Precio: '.$getProductos['pPrecio'];
 	 //echo "<a href='productos_modificar' value='$cont'> Modificar</a>".'</p>';
 	 //$cont++;
	 
	 echo '<tr>
                      <td>'.$getProductos['idProducto'].'</td>
					  <td>'.$getProductos['pNombre'].'</td>
                      <td>'.$getProductos['pDescripcion'].' </td>
                      
                      <td>'.$getProductos['pPrecio'].'</td>
					  <td>'.$getProductos['fNombre'].'</td>
					  
					  
					  
					  <td>'.$getProductos['cDescripcion'].'</td>
					  <td><a href="actualizar_producto?idproducto='.$getProductos['idProducto'].'"> Actualizar</a></td>
                      </tr>';
	 
	 
	 
	 
	 
	 
 	}
 endforeach; 
//echo '</div>';

?>
