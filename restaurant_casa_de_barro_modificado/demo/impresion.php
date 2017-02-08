<?
require_once('model.php');
$idx =$_GET[id];
$getDetallePedidos = getDetallePedidos($idx);
//echo "holas";
//Este contenido va a cambiar :D</div>
 echo '<div id=\'10668\'>';
 $contador=0;
 foreach($getDetallePedidos as $getDetallePedido): 
 if ($contador==0)
 	{
		
	 echo $getDetallePedido['vFecha'].'<p>'.$getDetallePedido['pNombres'].' '.$getDetallePedido['pApellidos']. '<p>' ;
	 $contador=1;
	 echo 'Detalle Pedido<p> Numero de mesa: '.$getDetallePedido['vMesa'].'<p>';
 	}
 
 	echo $getDetallePedido['vd_Cantidad'].' - '.$getDetallePedido['pNombre']. '<p>' ;
 endforeach; 
echo '</div>';
?>