<div class="lista_productos_contenedor">


<?php
 foreach($cproductos as $cproducto): 

 
 
 echo '<div class=\'lista_productos\'>
	<a onclick="javascript:cargar(\'10663\',\''. $cproducto['id'] .'\'); return false;" href=\'#\'>' . $cproducto['pNombre'] . '</a></div>';
 
 
 endforeach; 
?>


<div class="lista_productos">
<a onclick="javascript:cargar('10663','27'); return false;" href="#">PATATAS FRITAS</a>
</div> 
</div>