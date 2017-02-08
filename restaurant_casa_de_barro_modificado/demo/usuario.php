<?
require_once('model.php');
$getPersonas = getPersonas	($idx);
$cont = 1;
foreach($getPersonas as $getPersona): 
 	{		
	 echo 'Nombres :'.$getPersona['pNombres'].' Apellidos :'.$getPersona['pApellidos'].' Rol: '.$getPersona['pCargo'].'Alias :'.$getPersona['pAlias'] ;
 	 echo "<a href='usuario_modificar' value='$cont'> Modificar</a>".'</p>';
 	 $cont++;
 	}
 endforeach; 
//echo '</div>';

?>

<a href="usuario_crear"> Nuevo Usuario</a>
