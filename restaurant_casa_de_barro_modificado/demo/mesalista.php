<?php
require_once('model.php');

$idx =0;

$cproductos = getAllMesas($idx);
//echo "holas";
//Este contenido va a cambiar :D</div>

//$cventas = getAllVentas($idx);
//foreach($cventas as $cventa): 
//echo "holaaaa".$cventa['vFecha'];
//endforeach; 


 
// fecha_a es la primera fecha
//$fecha_a= "2014-04-27 13:20:27";
// fecha_b en este caso es la fecha actual
$hora = new DateTime();
$hora->setTimezone(new DateTimeZone('America/Bogota'));
$fecha_b=date($hora->format('Y/m/d H:i:s'));
// fecha_b en este caso es la fecha actual

//echo $fecha_b;
function minutos_transcurridos($fecha_i,$fecha_f)
{
$minutos = (strtotime($fecha_i)-strtotime($fecha_f))/60;
$minutos = abs($minutos); $minutos = floor($minutos);
return $minutos;
}
 

//echo minutos_transcurridos($fecha_a,$fecha_b); 






 echo '<div id=\'10668\'>';
 foreach($cproductos as $cproducto): 
 $fecha_a=$cproducto['mFecha'];
 $estado=$cproducto['mEstado'];
 //echo $estado;
 $tiempo =minutos_transcurridos($fecha_a,$fecha_b); 
 if ($tiempo>='31' and $tiempo<='60')
 {
	 $mesaestado='mesaestado2';
	 
 }
 if ($tiempo>='0' and $tiempo<='30')
 {
	 $mesaestado='mesaestado1';
	 
 }
 if ($tiempo>='61')
 	{
	 $mesaestado='mesaestado3';
	 
 	}
 //lista_productos
 if ($estado=='0')
 	{
	 $mesaestado='mesaestado';
 	}
 echo '<div class=\''.$mesaestado.'\'><a onclick="javascript:mesaseleccion(\'10663\',\''. $cproducto['mId'] .'\',\'carga\'); return false;" href=\'#\'><img src=\'imagenes/mesa/'. $cproducto['mImg'].'\' width=\'80\' height=\'76\' alt=\'img\' />' . $cproducto['mNumero'].'</a></div>';
 endforeach; 
echo '</div>';

?>