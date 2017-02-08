<?
require_once('model.php');
$getPersonas = getPersonas	($idx);
$cont = 1;
foreach($getPersonas as $getPersona): 
 	{		
	 
	 echo '<tr>
                      <td>'.$getPersona['pId'].'</td>
                      <td>'.$getPersona['pApellidos'].' '.$getPersona['pNombres'].'</td>
                      
                      <td>'.$getPersona['pFechNac'].'</td>
					  <td>'.$getPersona['pSexo'].'</td>
					  <td>'.$getPersona['pTelCell'].'</td>
					  <td>'.$getPersona['rNombre'].'</td>
					  <td>'.$getPersona['pAlias'].'</td>
					  <td>'.$getPersona['pFechReg'].'</td>
					  <td><a href="actualizar_usuario?idusuario='.$getPersona['pId'].'"> Actualizar</a></td>
                      </tr>';
	 
	 //echo 'Nombres :'.$getPersona['pNombres'].' Apellidos :'.$getPersona['pApellidos'].' Rol: '.$getPersona['pCargo'].'Alias :'.$getPersona['pAlias'] ;
 	 //echo "<a href='usuario_modificar' value='$cont'> Modificar</a>".'</p>';
 	 //$cont++;
	 
 	}
 endforeach; 
//echo '</div><a href="usuario_crear"> Nuevo Usuario</a>';

?>
