<?
	//sleep(1);
	require_once('model.php');
	$regPersona = regPersonas($_POST['pNombres'], $_POST['pApellidos'], $_POST['pFechNac'], $_POST['pSexo'], $_POST['pTelCell'], $_POST['pCargo'],$_POST['pNomCorto'],$_POST['pAlias'],$_POST['pPassword']);
	echo "Usuario Guardado";
?>