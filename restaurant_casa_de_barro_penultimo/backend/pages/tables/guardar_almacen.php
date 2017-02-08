<?
	//sleep(1);
	require_once('model.php');
	$getregAlmacen = regAlmacens($_POST['aProducto'], $_POST['aCantidad'], $_POST['aFecha'], $_POST['aUnidadMedida']);
	echo "Producto Guardado";
?>