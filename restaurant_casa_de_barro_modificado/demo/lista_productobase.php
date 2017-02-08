<?
require_once('model.php');
$idx =$_GET[id];
$getProductoBases = getProductoBases($idx);
//echo "holas";
//Este contenido va a cambiar :D</div>
 echo '66656654654';
 //$contador=0;
 foreach($getProductoBases as $getProductoBase): 
 //if ($contador==0)
 	{
		
	 echo $getProductoBase['pNombre']. ' Precio:  '.$getProductoBase['pPrecio']. '<p>';
 	}
 //echo "mensaje";
 	//echo $getDetallePedido['vd_Cantidad'].' - '.$getDetallePedido['pNombre']. '<p>' ;
 endforeach; 
echo '</div>';
?>