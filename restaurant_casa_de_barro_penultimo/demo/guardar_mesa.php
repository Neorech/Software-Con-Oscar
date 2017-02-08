<?
	//sleep(1);
	require_once('model.php');
	$regMesa = regMesas($_POST['mNumero'], $_POST['mFamilia'], $_POST['mEstado'], $_POST['mImg'], $_POST['mFecha'], $_POST['mPago']);
	echo "Mesa Agregada";
?>