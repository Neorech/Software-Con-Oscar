<?
	//sleep(1);
	require_once('model.php');
	$regProductos = regProductoss($_POST['pNombre'],$_POST['pDescripcion'],$_POST['pPrecio'],$_POST['pFamilia'],$_POST['pImg'],$_POST['xpThumb'],$_POST['idCarta']);
	echo "Producto Guardado";
?>