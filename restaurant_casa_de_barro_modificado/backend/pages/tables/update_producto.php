<?
mysql_connect('localhost','root','123456');
mysql_select_db('restaurante');

$producto= $_POST['producto'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$familia=$_POST['familia'];
$opcion=$_POST['opcion'];
$carta=$_POST['carta'];
$alias=$_POST['alias'];
$password=$_POST['password'];
$pTelCell=$_POST['pTelCell'];
$idproducto=$_POST['idproducto'];
$idAlmacen=$_POST['idAlmacen'];
//$ausuario=$_GET['idusuario'];
//echo $idpersona."_________________";

if($idproducto=='1')
{
//mysql_query("INSERT INTO persona (pNombres, pApellidos, pFechNac, pSexo, pTelCell, pImg, pCargo, pNomCorto, pAlias, pPassword, pFechReg) VALUES ('$nombres', '$apellidos', '$pFechNac', '$pSexo', '$pTelCell', 'IMG.JPG', '$opcion', 'HENRYKOO', '$alias', '$password', '2015-05-06')");

mysql_query("INSERT INTO productos (pNombre, pDescripcion, pPrecio, pFamilia, pImg, pThumb, idCarta) VALUES ('$producto', '$descripcion', '$precio', '$familia', '1', '1', '$carta')");

mysql_query("INSERT INTO productoalmacen (idProducto, idAlmacen, paCantidad) VALUES (SELECT idProducto FROM productos WHERE pNombre='$producto', '$idAlmacen', '0')");

	echo '<div class="callout callout-info">
              <h4>El registro fue Agregado Satisfactoriamente!!!</h4>
              <p></p>
            </div>';
}
else
{

mysql_query("UPDATE productos SET pNombre = '$producto', pDescripcion = '$descripcion', pPrecio = '$precio', pFamilia = '$familia', pImg = '1.jpg', pThumb = '1.jpg', idCarta = '$carta' WHERE idProducto = '$idproducto'");




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