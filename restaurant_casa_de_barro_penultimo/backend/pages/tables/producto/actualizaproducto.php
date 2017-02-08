<?
require_once('model.php');

$id=$_GET['idproducto'];
$getSelectProductos = getSelectProductos($id);
$cont = 1;
$getSelectFamilias = getSelectFamilias($id);

$getSelectCartas = getSelectCartas($id);
foreach($getSelectProductos as $getSelectProducto): 
 	{
 			
	 				echo'<div class="form-group">
                      <label>Producto</label>
                      <input type="text" name="producto" id="nombres" class="form-control" value="'.$getSelectProducto['pNombre'].'"/>
					  <input type="hidden" name="idproducto" id="idpersona" class="form-control" value="'.$getSelectProducto['idProducto'].'"/>
                    </div>';
					/*echo'<div class="form-group">
                      <label>Familia</label>
                      <input type="text" name="apellidos" class="form-control" value="'.$getSelectProducto['pFamilia'].'"/>
                    </div>';*/
					echo'<div class="form-group">
                      <label>Descripcion</label>
                      <input type="text" name="descripcion" class="form-control" value="'.$getSelectProducto['pDescripcion'].'"/>
                    </div>';
					
					echo'<div class="form-group">
                      <label>Precio</label>
                      <input type="text" name="precio" class="form-control" value="'.$getSelectProducto['pPrecio'].'"/>
                    </div>';
					/*echo'<div class="form-group">
                      <label>Telefono / Celular</label>
                      <input type="text" name="pTelCell" class="form-control" value="'.$getSelectProducto['pTelCell'].'"/>
                    </div>';*/
					
					echo'<div class="form-group">
                      <label>Familia</label>
                      <select name="familia" class="form-control">
                        <option value="'.$getSelectProducto['pFamilia'].'">'.$getSelectProducto['fNombre'].'</option>';
						foreach($getSelectFamilias as $getSelectFamilia): 
 						{
					
						echo'
						<option value="'.$getSelectFamilia['fId'].'">'.strtoupper($getSelectFamilia['fNombre']).'</option>
						';
						
						/*<option value="1">Administrador</option>
						*/
						}
                       endforeach;
					  echo'</select>
                    </div>';
					
					echo'<div class="form-group">
                      <label>Carta</label>
                      <select name="carta" class="form-control">
                        <option value="'.$getSelectProducto['idCarta'].'">'.$getSelectProducto['cDescripcion'].'</option>';
						
						
						foreach($getSelectCartas as $getSelectCarta): 
 						{
					
						echo'
						<option value="'.$getSelectCarta['idCarta'].'">'.strtoupper($getSelectCarta['cDescripcion']).'</option>
						';
						
						/*<option value="1">Administrador</option>
						*/
						}
                       endforeach;
						
                    echo'</select>
                    </div>';
					
					/*echo'<div class="form-group">
                      <label>Alias</label>
                      <input type="text" name="alias" class="form-control" value="'.$getconsultaPersona['pAlias'].'"/>
                    </div>';
					echo'<div class="form-group">
                      <label>Password</label>
                      <input type="text" name="password" class="form-control" value="'.$getconsultaPersona['pPassword'].'"/>
                    </div>';*/
	 
	 //echo 'Nombres :'.$getPersona['pNombres'].' Apellidos :'.$getPersona['pApellidos'].' Rol: '.$getPersona['pCargo'].'Alias :'.$getPersona['pAlias'] ;
 	 //echo "<a href='usuario_modificar' value='$cont'> Modificar</a>".'</p>';
 	 //$cont++;
	 
 	}
 endforeach; 
//echo '</div>';

?>


