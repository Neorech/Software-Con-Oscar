<?
require_once('model.php');
$id=$_GET['idusuario'];
$getconsultaPersonas = getconsultaPersonas($id);
$cont = 1;
foreach($getconsultaPersonas as $getconsultaPersona): 
 	{		
	 				echo'<div class="form-group">
                      <label>Nombres</label>
                      <input type="text" name="nombres" id="nombres" class="form-control" value="'.$getconsultaPersona['pNombres'].'"/>
					  <input type="hidden" name="idpersona" id="idpersona" class="form-control" value="'.$getconsultaPersona['pId'].'"/>
                    </div>';
					echo'<div class="form-group">
                      <label>Apellidos</label>
                      <input type="text" name="apellidos" class="form-control" value="'.$getconsultaPersona['pApellidos'].'"/>
                    </div>';
					echo'<div class="form-group">
                      <label>Fecha Nacimiento</label>
                      <input type="text" name="pFechNac" class="form-control" value="'.$getconsultaPersona['pFechNac'].'"/>
                    </div>';
					echo'<div class="form-group">
                      <label>Sexo</label>
                      <input type="text" name="pSexo" class="form-control" value="'.$getconsultaPersona['pSexo'].'"/>
                    </div>';
					echo'<div class="form-group">
                      <label>Telefono / Celular</label>
                      <input type="text" name="pTelCell" class="form-control" value="'.$getconsultaPersona['pTelCell'].'"/>
                    </div>';
					echo'<div class="form-group">
                      <label>Select</label>
                      <select name="opcion" class="form-control">
                        <option value="'.$getconsultaPersona['idRol'].'">'.$getconsultaPersona['rNombre'].'</option>
						<option value="1">Administrador</option>
						<option value="2">Mozo</option>
                        <option value="3">Cocinero</option>
                        <option value="4">Ayudante de Cocina</option>
                        <option value="5">Deshabilitado</option>
                        
                      </select>
                    </div>';
					echo'<div class="form-group">
                      <label>Alias</label>
                      <input type="text" name="alias" class="form-control" value="'.$getconsultaPersona['pAlias'].'"/>
                    </div>';
					echo'<div class="form-group">
                      <label>Password</label>
                      <input type="text" name="password" class="form-control" value="'.$getconsultaPersona['pPassword'].'"/>
                    </div>';
	 
	 //echo 'Nombres :'.$getPersona['pNombres'].' Apellidos :'.$getPersona['pApellidos'].' Rol: '.$getPersona['pCargo'].'Alias :'.$getPersona['pAlias'] ;
 	 //echo "<a href='usuario_modificar' value='$cont'> Modificar</a>".'</p>';
 	 //$cont++;
	 
 	}
 endforeach; 
//echo '</div>';

?>


