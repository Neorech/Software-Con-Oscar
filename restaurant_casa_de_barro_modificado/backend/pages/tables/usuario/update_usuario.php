<?
mysql_connect('localhost','root','123456');
mysql_select_db('restaurante');

$nombres= $_POST['nombres'];
$apellidos=$_POST['apellidos'];
$pFechNac=$_POST['pFechNac'];
$pSexo=$_POST['pSexo'];
$opcion=$_POST['opcion'];
$pTelCell=$_POST['pTelCell'];
$alias=$_POST['alias'];
$password=$_POST['password'];
$pTelCell=$_POST['pTelCell'];
$idpersona=$_POST['idpersona'];
//$ausuario=$_GET['idusuario'];
//echo $idpersona."_________________";

if($idpersona=='1')
{
mysql_query("INSERT INTO persona (pNombres, pApellidos, pFechNac, pSexo, pTelCell, pImg, pCargo, pNomCorto, pAlias, pPassword, pFechReg) VALUES ('$nombres', '$apellidos', '$pFechNac', '$pSexo', '$pTelCell', 'IMG.JPG', '$opcion', 'HENRYKOO', '$alias', '$password', '2015-05-06')");



	echo '<div class="callout callout-info">
              <h4>El registro fue Agregado Satisfactoriamente!!!</h4>
              <p></p>
            </div>';
}
else
{

mysql_query("UPDATE persona SET pNombres = '$nombres', pApellidos = '$apellidos', pFechNac = '$pFechNac', pSexo = '$pSexo', pTelCell = '$pTelCell', pImg = 'per9', pCargo = '$opcion', pNomCorto = 'nombrecorto', pAlias = '$alias', pPassword = '$password', pFechReg = '2015-05-21 00:00:00' WHERE pId = '$idpersona'");


//mysql_query("UPDATE  persona SET  pNombres = '$nombres', pApellidos =  '$apellidos',pFechNac =  '$pFechNac',pSexo =  '$pSexo',pTelCell =  '$pTelCell',pImg =  'img.jpg',pCargo =  '$opcion',pNomCorto =  'nombre corto',pAlias = '$alias',pPassword =  '$password',pFechReg =  '2015-05-06 00:00:00' WHERE  pId ='idpersona'");

	echo '<p></p><p></p><div class="callout callout-info">
              
			  <h4>El registro fue Actualizado Satisfactoriamente!!!</h4>
              
            </div><p></p>';
}
//echo "____________".$idpersona;
			echo '<p></p><div class="box-footer clearfix">
                  <a href="persona.php" class="btn btn-sm btn-info btn-flat pull-left">Ver lista de Personal Registrado</a>
                  <a href="actualizar_usuario?idusuario=1&estado=nuevo" class="btn btn-sm btn-default btn-flat pull-right">Agregar Nuevo Personal</a>
                </div>';

?>