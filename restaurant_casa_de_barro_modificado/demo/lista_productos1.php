
<?php
require_once('model.php');

$idx =$_GET[id];

$cproductos = getAllPosts($idx);
//echo "holas";
//Este contenido va a cambiar :D</div>
 echo '<div id=\'10668\'>';
 foreach($cproductos as $cproducto): 
 echo '<div class=\'lista_productos\'><a onclick="javascript:cargar(\'10663\',\''. $cproducto['idProducto'] .'\',\'carga\'); return false;" href=\'#\'><img src=\'imagenes/producto/'. $cproducto['pImg'].'\' width=\'76\' height=\'40\' alt=\'img\' />' . $cproducto['pNombre'].'</a></div>';
 endforeach; 
echo '</div>';

?>


