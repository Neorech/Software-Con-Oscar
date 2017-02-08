<?php
require_once('model.php');

$idx =$_GET[id];

$cproductos = getAllPersonas($idx);
//echo "holas";
//Este contenido va a cambiar :D</div>
 echo '<div id=\'10668\'>';
 foreach($cproductos as $cproducto): 
 echo '<div class=\'lista_productos\'><a onclick="javascript:personaseleccion(\''. $cproducto['pImg'] .'\',\''. $cproducto['pId'] .'\',\''. $cproducto['pNombres'] .'\'); return false;" href=\'#\'><img src=\'imagenes/persona/'. $cproducto['pImg'].'\' width=\'70\' height=\'74\' alt=\'img\' />' . $cproducto['pNombres'].'</a></div>';
 endforeach; 
echo '</div>';

?>